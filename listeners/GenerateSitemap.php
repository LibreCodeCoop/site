<?php namespace App\Listeners;

use samdark\sitemap\Sitemap;
use TightenCo\Jigsaw\Jigsaw;

class GenerateSitemap
{
    public function handle(Jigsaw $jigsaw)
    {
        $siteHost = trim((string) file_get_contents('CNAME'));
        $imageLookup = $this->buildImageLookup($jigsaw, $siteHost);
        $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

        $jigsaw->getPages()
            ->each(function ($pageData, $path) use ($siteHost, $imageLookup, $sitemap) {
                $normalizedPath = $this->normalizeOutputPath((string) $path);

                if ($this->isAsset($normalizedPath)) {
                    return;
                }

                $images = $imageLookup[$normalizedPath] ?? $this->resolveImages(
                    $siteHost,
                    $this->extractPageObject($pageData),
                );

                $sitemap->addItem(
                    $this->normalizeSiteUrl($siteHost, $normalizedPath),
                    time(),
                    Sitemap::DAILY,
                    null,
                    $images,
                );
            });

        $sitemap->write();
    }

    /**
     * @return array<string, list<string>>
     */
    protected function buildImageLookup(Jigsaw $jigsaw, string $siteHost): array
    {
        $lookup = [];

        foreach (['posts', 'posts_wordpress'] as $collectionName) {
            $collection = $jigsaw->getCollection($collectionName);

            if (! is_iterable($collection)) {
                continue;
            }

            foreach ($collection as $item) {
                $images = $this->resolveImages($siteHost, $item);

                if ($images === []) {
                    continue;
                }

                foreach ($this->resolveLookupPaths($item) as $path) {
                    $lookup[$path] = $images;
                }
            }
        }

        return $lookup;
    }

    protected function normalizeSiteUrl(string $siteHost, string $path): string
    {
        return 'https://' . $siteHost . ($path === '/' ? '/' : '/' . ltrim($path, '/'));
    }

    /**
     * @return list<string>
     */
    protected function resolveImages(string $siteHost, $page): array
    {
        if (! is_object($page)) {
            return [];
        }

        foreach (['banner', 'cover_image'] as $property) {
            $value = $page->{$property} ?? null;

            if (! is_string($value) || $value === '') {
                continue;
            }

            $normalized = $this->normalizeImageUrl($siteHost, $value);

            if ($normalized === null || $this->isDefaultImage($siteHost, $normalized)) {
                continue;
            }

            return [$normalized];
        }

        return [];
    }

    /**
     * @return list<string>
     */
    protected function resolveLookupPaths($item): array
    {
        if (! is_object($item)) {
            return [];
        }

        $paths = [];

        if (method_exists($item, 'getPath')) {
            $path = $item->getPath();

            if (is_string($path) && $path !== '') {
                $paths[] = $this->normalizeOutputPath($path);
            }
        }

        if ($paths === [] && method_exists($item, 'getUrl')) {
            $url = $item->getUrl();

            if (is_string($url) && $url !== '') {
                $paths[] = $this->normalizeOutputPath($url);
            }
        }

        return array_values(array_unique($paths));
    }

    protected function extractPageObject($pageData)
    {
        if (! is_object($pageData)) {
            return null;
        }

        return $pageData->page ?? $pageData;
    }

    protected function normalizeOutputPath(string $path): string
    {
        $urlPath = parse_url($path, PHP_URL_PATH);

        if (! is_string($urlPath) || $urlPath === '') {
            return '/';
        }

        return $urlPath === '/' ? '/' : '/' . ltrim($urlPath, '/');
    }

    protected function normalizeImageUrl(string $siteHost, string $url): ?string
    {
        $trimmed = trim($url);

        if ($trimmed === '') {
            return null;
        }

        if (filter_var($trimmed, FILTER_VALIDATE_URL)) {
            return $trimmed;
        }

        return $this->normalizeSiteUrl($siteHost, $trimmed);
    }

    protected function isDefaultImage(string $siteHost, string $url): bool
    {
        return in_array($url, [
            $this->normalizeSiteUrl($siteHost, '/assets/images/logo/logo.svg'),
            $this->normalizeSiteUrl($siteHost, '/assets/images/logo/librecode.png'),
        ], true);
    }

    public function isAsset($path)
    {
        return str_starts_with($path, '/assets')
            || str_starts_with($path, '/fragments/');
    }
}
