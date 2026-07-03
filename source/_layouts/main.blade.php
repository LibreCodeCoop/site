<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
  <meta charset="utf-8">
  <title>{{ $page->title }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  @if (!empty($og_image))
    <meta property="og:image" content="{{ $og_image }}"/>
  @else
    <meta property="og:image" content="{{ $page->baseUrl }}assets/images/logo.png"/>
  @endif
  <meta property="og:url" content="{{ $page->getUrl() }}">
  <meta property="og:type" content="website">
  <meta property="og:title" content="LibreCode">
  <meta property="og:description" content="{{ $page->description }}">

  <link rel="canonical" href="{{ $page->getUrl() }}">
  <meta name="description" content="{{ $page->description }}">

  <!-- Favicons -->
  <link href="{{ $page->baseUrl }}assets/images/favico.png" rel="icon">
  <link href="{{ $page->baseUrl }}assets/images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&family=JetBrains+Mono:wght@400;500;600&family=Open+Sans:wght@300;400;700&family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ $page->baseUrl }}assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

</head>

<body>
    <a href="#main" class="lc-skip">Pular para o conteúdo</a>
    <div class="lc-progress" aria-hidden="true"></div>
    @include('_layouts.header')
    @yield('body')
    @include('_layouts.footer')
</body>
</html>
