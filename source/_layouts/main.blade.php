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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ $page->baseUrl }}assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

</head>

<body>
    @include('_layouts.header')
    @yield('body')
    @include('_layouts.footer')

    <!-- Chatwoot widget -->
    <script>
      (function(d,t) {
        var BASE_URL="https://chatwoot.librecode.coop";
        var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=BASE_URL+"/packs/js/sdk.js";
        g.async = true;
        s.parentNode.insertBefore(g,s);
        g.onload=function(){
          window.chatwootSDK.run({
            websiteToken: '1FWLmSUAXnZd8qhUB5rsPCdq',
            baseUrl: BASE_URL
          })
        }
      })(document,"script");
    </script>
</body>
</html>
