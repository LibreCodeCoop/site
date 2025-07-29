<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div>
                    <a href="https://www.somos.coop.br/" target="_blank">
                        <img
                        src="{{ $page->baseUrl }}assets/images/logo/somoscoop-horizontal-light.png"
                        alt="somos coop logo imagem"
                        width="220" height="200"
                        />
                    </a>
                </div>

            <div>
                <div class="social-links">
                    <a href="https://t.me/LibreCodeCoop" class="telegram" target="_blank"><i class="fa fa-telegram"></i></a>
                    <a href="https://www.facebook.com/librecodecoop/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/librecodecoop/" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://github.com/librecodecoop" class="github" target="_blank"><i class="fa fa-github"></i></a>
                    <a href="https://www.linkedin.com/company/librecode/" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
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
                        Designed by <a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a>
                    </div>
                </div>

            </div>
        </div>
    </div>


</footer>

 <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> -->
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{ mix('js/main.js', 'assets/build') }}" type="text/javascript"></script>
  <!-- Contact Form JavaScript File -->
  <!-- <script src="contactform/contactform.js"></script>-->
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  @yield('footer_scripts')
    <script>
      var _mtm = window._mtm = window._mtm || [];
      _mtm.push({'mtm.startTime': (new Date().getTime()), 'event': 'mtm.Start'});
      (function() {
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true;
        g.src='https://matomo.librecode.coop/js/container_{{ $page->matomo_container }}.js';
        s.parentNode.insertBefore(g,s);
      })();
    </script>
  @if ($page->production)
	<script type="text/javascript">
    (function(w, d, s, u) {
      w.RocketChat = function(c) { w.RocketChat._.push(c) }; w.RocketChat._ = []; w.RocketChat.url = u;
      var h = d.getElementsByTagName(s)[0], j = d.createElement(s);
      j.async = true; j.src = 'https://chat.librecode.coop/livechat/rocketchat-livechat.min.js?_=201903270000';
      h.parentNode.insertBefore(j, h);
    })(window, document, 'script', 'https://chat.librecode.coop/livechat');
  </script>
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
