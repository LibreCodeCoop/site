<!DOCTYPE html>
<html lang="{{ $page->language ?? 'pt-BR' }}">
<head>
  <meta charset="utf-8">
  <title>{{ $page->title ?? 'LibreCode — Cooperativa de Software Livre' }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="keywords" content="software livre, cooperativa tecnologia, nuvem privada, ERP, CRM, automação de marketing, hospedagem Brasil, LGPD, soberania digital, suporte em português">
  <meta name="description" content="{{ $page->description ?? 'Cooperativa de tecnologia especializada em soluções corporativas com software livre. Nuvem privada, gestão, CRM, atendimento e automação com hospedagem no Brasil, suporte em português e foco em LGPD.' }}">
  <meta name="author" content="LibreCode Cooperativa">
  <meta name="robots" content="index, follow">

  <link rel="canonical" href="{{ $page->getUrl() }}">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ $page->getUrl() }}">
  <meta property="og:title" content="{{ $page->title ?? 'LibreCode — Cooperativa de Software Livre' }}">
  <meta property="og:description" content="{{ $page->description ?? 'Cooperativa de tecnologia especializada em soluções corporativas com software livre. Nuvem privada, gestão, CRM, atendimento e automação com hospedagem no Brasil.' }}">
  @if (!empty($og_image))
    <meta property="og:image" content="{{ $og_image }}"/>
  @else
    <meta property="og:image" content="{{ $page->baseUrl }}assets/images/logo.png"/>
  @endif

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="{{ $page->title ?? 'LibreCode' }}">
  <meta name="twitter:description" content="{{ $page->description ?? 'Cooperativa de tecnologia especializada em soluções corporativas com software livre.' }}">
  <meta name="twitter:image" content="{{ $page->baseUrl }}assets/images/logo.png">

  <!-- Schema.org JSON-LD -->
  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@type": "Organization",
    "name": "LibreCode",
    "legalName": "LibreCode Cooperativa de Tecnologia",
    "url": "https://librecode.coop",
    "logo": "{{ $page->baseUrl }}assets/images/logo/librecode.png",
    "description": "Cooperativa de tecnologia da informação especializada em desenvolvimento de soluções com licença livre",
    "foundingDate": "2018",
    "address": { "@@type": "PostalAddress", "addressCountry": "BR" },
    "contactPoint": {
      "@@type": "ContactPoint",
      "contactType": "customer support",
      "availableLanguage": ["Portuguese", "English"]
    },
    "sameAs": [
      "https://github.com/librecodecoop",
      "https://www.linkedin.com/company/librecode/",
      "https://t.me/LibreCodeCoop",
      "https://www.instagram.com/librecodecoop/",
      "https://www.facebook.com/librecodecoop/"
    ],
    "serviceType": [
      "Software Development", "Cloud Hosting", "IT Consulting",
      "Digital Signature Solutions", "CRM Solutions", "Marketing Automation"
    ]
  }
  </script>

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

    {{-- Production only, so dev and PR previews don't open real conversations. --}}
    @if ($page->production)
    <!-- Chatwoot widget -->
    <script>
      (function (documentRef, scriptTagName) {
        var chatwootBaseUrl = "https://chatwoot.librecode.coop";
        var chatwootScript = documentRef.createElement(scriptTagName);
        var firstScriptTag = documentRef.getElementsByTagName(scriptTagName)[0];
        chatwootScript.src = chatwootBaseUrl + "/packs/js/sdk.js";
        chatwootScript.async = true;
        firstScriptTag.parentNode.insertBefore(chatwootScript, firstScriptTag);
        chatwootScript.onload = function () {
          window.chatwootSDK.run({
            websiteToken: '{{ $page->chatwoot_token }}',
            baseUrl: chatwootBaseUrl
          });
        };
      })(document, "script");
    </script>
    @endif
</body>
</html>
