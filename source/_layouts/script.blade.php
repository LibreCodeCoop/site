<!-- Vendors-->
<script type="text/javascript" src="/vendors/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
<script type="text/javascript" src="/vendors/isotope-layout/isotope.pkgd.js"></script>
<script type="text/javascript" src="/vendors/jquery.countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/vendors/jquery.countTo/jquery.countTo.min.js"></script>
<script type="text/javascript" src="/vendors/jquery.countUp/jquery.countup.min.js"></script>
<script type="text/javascript" src="/vendors/jquery.matchHeight/jquery.matchHeight.min.js"></script>
<script type="text/javascript" src="/vendors/jquery.mb.ytplayer/jquery.mb.YTPlayer.min.js"></script>
<script type="text/javascript" src="/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/vendors/masonry-layout/masonry.pkgd.js"></script>
<script type="text/javascript" src="/vendors/owl.carousel/owl.carousel.js"></script>
<script type="text/javascript" src="/vendors/jquery.waypoints/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="/vendors/menu/menu.min.js"></script>
<script type="text/javascript" src="/vendors/smoothscroll/SmoothScroll.min.js"></script>
<script type="text/javascript" src="/vendors/animated-headline/js/animated-headline.js"></script>
<!-- App-->
<script type="text/javascript" src="/assets/build/js/main.js"></script>
@if ($page->google_analytics_tracking_id)
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id={{ $page->google_analytics_tracking_id }}"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', '{{ $page->google_analytics_tracking_id }}');
  </script>
@endif