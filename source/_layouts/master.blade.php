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
    @yield('body')
  <!--==========================
    Contact Section
  ============================-->
  <section id="contact">
    <div class="container">
      <div class="section-header">
        <h3>Contato</h3>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-md-6 info">
              <i class="ion-ios-email-outline"></i>
              <p>contato@librecode.coop</p>
            </div>
            <div class="col-md-6 info" style="text-align: right;">
              <i class="ion-ios-telephone-outline"></i>
              <p>+55(21)2042-2073</p>
            </div>
          </div>
          <div class="form">
            <iframe id="form-contato" src="https://ls.librecode.coop/?r=survey/index&sid=467949&newtest=Y" style="width: 100%;height:460px;border: 0;overflow:hidden;" scrolling="no"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #contact -->
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div>
              <a href="https://www.somos.coop.br/" target="_blank">
                <img
                  src="../assets/images/somoscoop-horizontal.png"
                  alt="somos coop logo imagem"
                  width="220" height="200"
                />
              </a>
          </div>

          <div>

            <div class="social-links">
              <a href="https://t.me/LibreCodeCoop" class="telegram" target=“_blank”><i class="fa fa-telegram"></i></a>
              <a href="https://www.facebook.com/librecodecoop/" class="facebook" target=“_blank”><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/librecodecoop/" class="instagram" target=“_blank”><i class="fa fa-instagram"></i></a>
              <a href="https://github.com/librecodecoop" class="github" target=“_blank”><i class="fa fa-github"></i></a>
              <a href="https://www.linkedin.com/company/librecode/" class="linkedin" target=“_blank”><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

      </div>
      <div class="item">
          <div>
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
<script>
  var lightbox = GLightbox();
  lightbox.on('open', (target) => {
      console.log('lightbox opened');
  });
  var lightboxDescription = GLightbox({
      selector: '.glightbox2'
  });
  var lightboxVideo = GLightbox({
      selector: '.glightbox3'
  });
  lightboxVideo.on('slide_changed', ({ prev, current }) => {
      console.log('Prev slide', prev);
      console.log('Current slide', current);

      const { slideIndex, slideNode, slideConfig, player } = current;

      if (player) {
          if (!player.ready) {
              // If player is not ready
              player.on('ready', (event) => {
                  // Do something when video is ready
              });
          }

          player.on('play', (event) => {
              console.log('Started play');
          });

          player.on('volumechange', (event) => {
              console.log('Volume change');
          });

          player.on('ended', (event) => {
              console.log('Video ended');
          });
      }
  });

  var lightboxInlineIframe = GLightbox({
      selector: '.glightbox4'
  });
</script>
</body>
</html>
