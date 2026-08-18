<?php

declare(strict_types=1);

namespace Tests\Unit\Listeners;

use App\Listeners\GenerateSitemap;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use TightenCo\Jigsaw\Jigsaw;

final class GenerateSitemapTest extends TestCase
{
    #[DataProvider('resolveImagesProvider')]
    public function testResolveImagesReturnsExpectedPrimaryImage(object $page, array $expected): void
    {
        $listener = new TestableGenerateSitemap();

        self::assertSame($expected, $listener->exposeResolveImages('librecode.coop', $page));
    }

    public static function resolveImagesProvider(): iterable
    {
        yield 'prefers banner over cover' => [
            (object) [
                'banner' => '/assets/images/posts/advanced-security/banner.jpg',
                'cover_image' => '/assets/images/posts/advanced-security/cover.jpg',
            ],
            ['https://librecode.coop/assets/images/posts/advanced-security/banner.jpg'],
        ];

        yield 'falls back to cover image' => [
            (object) [
                'cover_image' => '/assets/images/posts/advanced-security/cover.jpg',
            ],
            ['https://librecode.coop/assets/images/posts/advanced-security/cover.jpg'],
        ];

        yield 'keeps absolute wordpress image' => [
            (object) [
                'banner' => 'https://cdn.example.com/librecode-api-guide/banner.webp',
            ],
            ['https://cdn.example.com/librecode-api-guide/banner.webp'],
        ];

        yield 'ignores default logo variants' => [
            (object) [
                'banner' => '/assets/images/logo/librecode.png',
                'cover_image' => '/assets/images/logo/librecode.png',
            ],
            [],
        ];
    }

    public function testBuildImageLookupCollectsContentImagesFromBothCollections(): void
    {
        $listener = new TestableGenerateSitemap();
        $jigsaw = $this->createStub(Jigsaw::class);

        $jigsaw->method('getCollection')->willReturnCallback(
            static fn (string $collectionName) => match ($collectionName) {
                'posts' => [
                    new FakeCollectionItem('/posts/advanced-security', [
                        'banner' => '/assets/images/posts/advanced-security/banner.jpg',
                        'cover_image' => '/assets/images/posts/advanced-security/cover.jpg',
                    ]),
                    new FakeCollectionItem('/posts/free-and-open-source-software-for-electronic-signatures', [
                        'banner' => '/assets/images/logo/librecode.png',
                    ]),
                ],
                'posts_wordpress' => [
                    new FakeCollectionItem('/posts/librecode-api-guide', [
                        'banner' => 'https://cdn.example.com/librecode-api-guide/banner.webp',
                    ]),
                ],
                default => null,
            },
        );

        self::assertSame([
            '/posts/advanced-security' => ['https://librecode.coop/assets/images/posts/advanced-security/banner.jpg'],
            '/posts/librecode-api-guide' => ['https://cdn.example.com/librecode-api-guide/banner.webp'],
        ], $listener->exposeBuildImageLookup($jigsaw, 'librecode.coop'));
    }

    public function testBuildImageLookupUsesCanonicalPathForPreviewUrls(): void
    {
        $listener = new TestableGenerateSitemap();
        $jigsaw = $this->createStub(Jigsaw::class);

        $jigsaw->method('getCollection')->willReturnCallback(
            static fn (string $collectionName) => match ($collectionName) {
                'posts' => [
                    new FakeCollectionItem(
                        'https://librecode.github.io/site-preview/pr-preview/pr-460/posts/advanced-security',
                        [
                            'banner' => '/assets/images/posts/advanced-security/banner.jpg',
                        ],
                        '/posts/advanced-security',
                    ),
                ],
                default => null,
            },
        );

        self::assertSame([
            '/posts/advanced-security' => ['https://librecode.coop/assets/images/posts/advanced-security/banner.jpg'],
        ], $listener->exposeBuildImageLookup($jigsaw, 'librecode.coop'));
    }

    public function testHandleWritesPrimaryImagesForContentPages(): void
    {
        $xml = $this->buildSitemapXml();

        self::assertStringContainsString('<loc>https://librecode.coop/posts/advanced-security</loc>', $xml);
        self::assertStringContainsString('<image:loc>https://librecode.coop/assets/images/posts/advanced-security/banner.jpg</image:loc>', $xml);
        self::assertStringContainsString('<loc>https://librecode.coop/posts/librecode-api-guide</loc>', $xml);
        self::assertStringContainsString('<image:loc>https://cdn.example.com/librecode-api-guide/banner.webp</image:loc>', $xml);
    }

    public function testHandleSkipsVariantsDefaultImagesAndAssets(): void
    {
        $xml = $this->buildSitemapXml();

        self::assertStringContainsString('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">', $xml);
        self::assertStringNotContainsString('<image:loc>https://librecode.coop/assets/images/posts/advanced-security/cover.jpg</image:loc>', $xml);
        self::assertStringNotContainsString('<image:loc>https://librecode.coop/assets/images/logo/librecode.png</image:loc>', $xml);
        self::assertStringNotContainsString('<loc>https://librecode.coop/assets/build/assets/main.js</loc>', $xml);
    }

    private function buildSitemapXml(): string
    {
        $listener = new GenerateSitemap();
        $jigsaw = $this->createSitemapJigsawStub();

        $listener->handle($jigsaw);

        $xml = file_get_contents(\org\bovigo\vfs\vfsStream::url('build/sitemap.xml'));

        self::assertIsString($xml);

        return $xml;
    }

    private function createSitemapJigsawStub(): Jigsaw
    {
        $jigsaw = $this->createStub(Jigsaw::class);
        \org\bovigo\vfs\vfsStream::setup('build');

        $jigsaw->method('getDestinationPath')->willReturn(\org\bovigo\vfs\vfsStream::url('build'));
        $jigsaw->method('getPages')->willReturn(new FakePageCollection([
            '/posts/advanced-security' => (object) ['page' => (object) []],
            '/posts/librecode-api-guide' => (object) ['page' => (object) []],
            '/posts/free-and-open-source-software-for-electronic-signatures' => (object) ['page' => (object) []],
            '/assets/build/assets/main.js' => (object) ['page' => (object) []],
            '/' => (object) ['page' => (object) []],
        ]));
        $jigsaw->method('getCollection')->willReturnCallback(
            static fn (string $collectionName) => match ($collectionName) {
                'posts' => [
                    new FakeCollectionItem('/posts/advanced-security', [
                        'banner' => '/assets/images/posts/advanced-security/banner.jpg',
                        'cover_image' => '/assets/images/posts/advanced-security/cover.jpg',
                    ]),
                    new FakeCollectionItem('/posts/free-and-open-source-software-for-electronic-signatures', [
                        'banner' => '/assets/images/logo/librecode.png',
                    ]),
                ],
                'posts_wordpress' => [
                    new FakeCollectionItem('/posts/librecode-api-guide', [
                        'banner' => 'https://cdn.example.com/librecode-api-guide/banner.webp',
                    ]),
                ],
                default => null,
            },
        );

        return $jigsaw;
    }
}

final class TestableGenerateSitemap extends GenerateSitemap
{
    public function exposeResolveImages(string $siteHost, object $page): array
    {
        return $this->resolveImages($siteHost, $page);
    }

    public function exposeBuildImageLookup(Jigsaw $jigsaw, string $siteHost): array
    {
        return $this->buildImageLookup($jigsaw, $siteHost);
    }
}

final class FakeCollectionItem
{
    public function __construct(
        private string $url,
        private array $attributes,
        private ?string $path = null,
    ) {
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getPath(): string
    {
        return $this->path ?? $this->url;
    }

    public function __get(string $name): mixed
    {
        return $this->attributes[$name] ?? null;
    }
}

final class FakePageCollection
{
    public function __construct(private array $items)
    {
    }

    public function each(callable $callback): self
    {
        foreach ($this->items as $key => $value) {
            $callback($value, $key);
        }

        return $this;
    }
}
