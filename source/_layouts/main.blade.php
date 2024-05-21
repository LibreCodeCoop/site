<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
  <meta charset="utf-8">
  <title>{{ $page->title }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <link rel="canonical" href="{{ $page->getUrl() }}">
  <meta name="description" content="{{ $page->description }}">

  <!-- Favicons -->
  <link href="../assets/images/favico.png" rel="icon">
  <link href="../assets/images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

</head>

<body>
    @include('_layouts.header')
    @yield('body')
    @include('_layouts.footer')
</body>
</html>
