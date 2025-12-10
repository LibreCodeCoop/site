<!DOCTYPE html>
<html lang="{{ $page->language ?? 'pt-BR' }}">
<head>
  <meta charset="utf-8">
  <title>{{ $page->title ?? 'LibreCode - Cooperativa de Software Livre' }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="keywords" content="software livre, open source, cooperativa tecnologia, nextcloud, libresign, suitecrm, mautic, desenvolvimento software, hospedagem brasil, LGPD, soberania digital, automação marketing, CRM, assinatura digital">
  <meta name="description" content="{{ $page->description ?? 'Cooperativa de tecnologia especializada em soluções com software livre. Nextcloud, LibreSign, SuiteCRM, Mautic e mais. Hospedagem no Brasil, suporte em português e 100% LGPD compliance.' }}">
  <meta name="author" content="LibreCode Cooperativa">
  <meta name="robots" content="index, follow">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ $page->getUrl() }}">
  <meta property="og:title" content="{{ $page->title ?? 'LibreCode - Cooperativa de Software Livre' }}">
  <meta property="og:description" content="{{ $page->description }}">
  @if (!empty($og_image))
    <meta property="og:image" content="{{ $og_image }}"/>
  @else
    <meta property="og:image" content="{{ $page->baseUrl }}assets/images/logo.png"/>
  @endif
  
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="{{ $page->getUrl() }}">
  <meta property="twitter:title" content="{{ $page->title ?? 'LibreCode' }}">
  <meta property="twitter:description" content="{{ $page->description }}">
  <meta property="twitter:image" content="{{ $page->baseUrl }}assets/images/logo.png">

  <link rel="canonical" href="{{ $page->getUrl() }}">

  <!-- Schema.org JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "LibreCode",
    "legalName": "LibreCode Cooperativa de Tecnologia",
    "url": "https://librecode.coop",
    "logo": "{{ $page->baseUrl }}assets/images/logo/librecode.png",
    "description": "Cooperativa de tecnologia da informação especializada em desenvolvimento de soluções com licença livre",
    "foundingDate": "2018",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "BR"
    },
    "contactPoint": {
      "@type": "ContactPoint",
      "contactType": "customer support",
      "availableLanguage": ["Portuguese", "English"]
    },
    "sameAs": [
      "https://github.com/librecodecoop",
      "https://www.linkedin.com/company/librecodecoop",
      "https://t.me/LibreCodeCoop",
      "https://www.instagram.com/librecodecoop/",
      "https://www.facebook.com/librecodecoop/"
    ],
    "serviceType": [
      "Software Development",
      "Cloud Hosting",
      "IT Consulting",
      "Digital Signature Solutions",
      "CRM Solutions",
      "Marketing Automation"
    ]
  }
  </script>

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
