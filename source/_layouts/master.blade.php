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
  <link href="assets/images/favico.png" rel="icon">
  <link href="assets/images/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ $page->baseUrl }}assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>

<body>
    @yield('body')
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">


          <div class="col-lg-6 col-md-6">

            <div class="social-links">
              <a href="https://t.me/LibreCodeCoop" class="telegram"><i class="fa fa-telegram"></i></a>
              <a href="https://www.facebook.com/librecodecoop/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/librecodecoop/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://github.com/librecodecoop" class="github"><i class="fa fa-github"></i></a>
              <a href="https://www.linkedin.com/company/librecode/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-6 col-md-6">
            <div class="copyright">
              &copy; Copyright <strong>LibreCode</strong>. Todos os direitos reservados
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>

        </div>
      </div>
    </div>

  </footer><!-- #footer -->

 <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{ mix('js/main.js', 'assets/build') }}" type="text/javascript"></script>
  <!-- Contact Form JavaScript File -->
  <!-- <script src="contactform/contactform.js"></script>-->
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  @yield('footer_scripts')
  @if ($page->production)
	<script type="text/javascript">
    (function(w, d, s, u) {
      w.RocketChat = function(c) { w.RocketChat._.push(c) }; w.RocketChat._ = []; w.RocketChat.url = u;
      var h = d.getElementsByTagName(s)[0], j = d.createElement(s);
      j.async = true; j.src = 'https://chat.librecode.coop/livechat/rocketchat-livechat.min.js?_=201903270000';
      h.parentNode.insertBefore(j, h);
    })(window, document, 'script', 'https://chat.librecode.coop/livechat');
  </script>
  <script type="text/javascript">
    var _paq = window._paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
      var u="//matomo.librecode.coop/";
      _paq.push(['setTrackerUrl', u+'matomo.php']);
      _paq.push(['setSiteId', '2']);
      var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
      g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <noscript>
    <img src="https://matomo.librecode.coop/matomo.php?idsite=2&amp;rec=1&amp;action_name={{ $page->getUrl() }}" style="border:0" alt="" />
  </noscript>
  @endif
</body>
</html>
