<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
  @php
    $siteName = $page->siteName ?? 'LibreCode';
    $defaultTitle = $page->title ?? 'LibreCode Cooperativa de Software Livre';
    $metaTitle = trim(\Illuminate\Support\Str::limit($defaultTitle, 70, ''));
    $metaDescription = $page->description ?? 'Cooperativa de tecnologia da informação especializada em desenvolvimento de soluções com licença livre.';
    $currentUrl = $page->getUrl();
    $organization = $page->organization ?? [];
    $organizationName = $organization['name'] ?? 'LibreCode';
    $organizationLegalName = $organization['legalName'] ?? $organizationName;
    $organizationUrl = $organization['url'] ?? $currentUrl;
    $organizationLogo = $organization['logo'] ?? 'assets/images/logo/librecode.png';
    $organizationEmail = $organization['email'] ?? 'contato@librecode.coop';
    $organizationTelephone = $organization['telephone'] ?? '+55-21-2042-2073';
    $organizationSameAs = $organization['sameAs'] ?? [];
    $logoUrl = str_starts_with($organizationLogo, 'http')
        ? $organizationLogo
        : rtrim($page->baseUrl, '/') . '/' . ltrim($organizationLogo, '/');
    $ogImage = !empty($og_image) ? $og_image : $logoUrl;
    $isArticle = !empty($page->date);
    $isHomePage = rtrim($currentUrl, '/') === rtrim($page->baseUrl, '/');

    $organizationSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $organizationName,
        'legalName' => $organizationLegalName,
        'url' => $organizationUrl,
        'logo' => $logoUrl,
        'email' => $organizationEmail,
        'telephone' => $organizationTelephone,
        'sameAs' => $organizationSameAs,
    ];

    $webPageSchema = [
        '@context' => 'https://schema.org',
        '@type' => $isArticle ? 'Article' : 'WebPage',
        'name' => $metaTitle,
        'headline' => $page->title ?? $metaTitle,
        'description' => $metaDescription,
        'url' => $currentUrl,
        'isPartOf' => [
            '@type' => 'WebSite',
            'name' => $siteName,
            'url' => $organizationUrl,
        ],
    ];

    if ($isArticle) {
        $webPageSchema['author'] = [
            '@type' => 'Organization',
            'name' => $page->author ?? $siteName,
        ];
        $webPageSchema['publisher'] = [
            '@type' => 'Organization',
            'name' => $organizationName,
            'logo' => [
                '@type' => 'ImageObject',
                'url' => $logoUrl,
            ],
        ];
        $webPageSchema['datePublished'] = date('c', $page->date);
        $webPageSchema['image'] = $page->banner ?? $page->cover_image ?? $ogImage;
        $webPageSchema['mainEntityOfPage'] = $currentUrl;
    }

    $schemas = [$organizationSchema, $webPageSchema];

    if ($isHomePage && !empty($page->homepageFaq)) {
        $schemas[] = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array_map(function ($item) {
                return [
                    '@type' => 'Question',
                    'name' => $item['question'],
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $item['answer'],
                    ],
                ];
            }, $page->homepageFaq),
        ];
    }
  @endphp
  <meta charset="utf-8">
  <title>{{ $metaTitle }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta name="description" content="{{ $metaDescription }}">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta property="og:image" content="{{ $ogImage }}"/>
  <meta property="og:url" content="{{ $currentUrl }}">
  <meta property="og:type" content="{{ $isArticle ? 'article' : 'website' }}">
  <meta property="og:site_name" content="{{ $siteName }}">
  <meta property="og:title" content="{{ $metaTitle }}">
  <meta property="og:description" content="{{ $metaDescription }}">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="{{ $metaTitle }}">
  <meta name="twitter:description" content="{{ $metaDescription }}">
  <meta name="twitter:image" content="{{ $ogImage }}">

  <link rel="canonical" href="{{ $currentUrl }}">

  <!-- Favicons -->
  <link href="{{ $page->baseUrl }}assets/images/favico.png" rel="icon">
  <link href="{{ $page->baseUrl }}assets/images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ $page->baseUrl }}assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
  <script type="application/ld+json">{!! json_encode($schemas, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}</script>

</head>

<body>
    @include('_layouts.header')
    @yield('body')
    @include('_layouts.footer')
</body>
</html>
