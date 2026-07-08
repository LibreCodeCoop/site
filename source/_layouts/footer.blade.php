<footer id="footer">
    <div class="footer-top">
        <div class="lc-footer">
            <div class="lc-footer__grid">

                <div class="lc-footer__brand">
                    <img src="{{ $page->baseUrl }}assets/images/logo/librecode.png" alt="LibreCode">
                    <p>Cooperativa digital de especialistas em desenvolvimento de software livre. Tecnologia com transparência e liberdade.</p>
                    <div class="social-links">
                        <a href="https://t.me/LibreCodeCoop" class="telegram" target="_blank" rel="noopener" aria-label="Telegram"><i class="fa fa-telegram"></i></a>
                        <a href="https://www.facebook.com/librecodecoop/" class="facebook" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/librecodecoop/" class="instagram" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa fa-instagram"></i></a>
                        <a href="https://github.com/librecodecoop" class="github" target="_blank" rel="noopener" aria-label="GitHub"><i class="fa fa-github"></i></a>
                        <a href="https://www.linkedin.com/company/librecode/" class="linkedin" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>

                <div class="lc-footer__col">
                    <h4>Navegação</h4>
                    <ul>
                        <li><a href="{{ locale_path($page, $page->baseUrl) }}#about">Quem somos</a></li>
                        <li><a href="{{ locale_path($page, $page->baseUrl) }}#why-us">Soluções</a></li>
                        <li><a href="{{ locale_path($page, $page->baseUrl) }}#clients">Clientes</a></li>
                        <li><a href="{{ locale_path($page, $page->baseUrl) }}#apoie">Apoie</a></li>
                        <li><a href="{{ locale_path($page, $page->baseUrl) }}posts">Blog</a></li>
                        <li><a href="{{ locale_path($page, $page->baseUrl) }}jobs">Coopere Conosco</a></li>
                    </ul>
                </div>

                <div class="lc-footer__col">
                    <h4>Contato</h4>
                    <ul>
                        <li><a href="tel:+552120422073">+55 (21) 2042-2073</a></li>
                        <li><a href="mailto:contato@librecode.coop">contato@librecode.coop</a></li>
                        <li><a href="{{ locale_path($page, $page->baseUrl) }}#contact">Fale conosco</a></li>
                    </ul>
                    <div class="lc-footer__coop" style="margin-top:26px">
                        <a href="https://www.somos.coop.br/" target="_blank" rel="noopener" aria-label="Somos Coop">
                            <img src="{{ $page->baseUrl }}assets/images/logo/somoscoop-horizontal-light.png" alt="Somos Coop">
                        </a>
                    </div>
                </div>

            </div>

            <div class="lc-footer__bottom">
                <div class="copyright">
                    &copy; {{ date('Y') }} <strong>LibreCode</strong> — Todos os direitos reservados
                </div>
                <div class="credits">
                    Feito com software livre em <a href="https://www.somos.coop.br/" target="_blank" rel="noopener">cooperação</a>
                </div>
            </div>
        </div>
    </div>
</footer>

  <!-- JavaScript Libraries -->
  <script src="{{ mix('js/main.js', 'assets/build') }}" type="text/javascript"></script>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  @yield('footer_scripts')

  <!-- GSAP (animation engine) + LibreCode motion -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>
  <script>if (window.gsap && window.ScrollToPlugin) gsap.registerPlugin(ScrollToPlugin);</script>
  <script src="{{ $page->baseUrl }}assets/js/librecode-motion.js"></script>

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
  var lightboxDescription = GLightbox({ selector: '.glightbox2' });
  var lightboxVideo = GLightbox({ selector: '.glightbox3' });
  var lightboxInlineIframe = GLightbox({ selector: '.glightbox4' });
</script>
