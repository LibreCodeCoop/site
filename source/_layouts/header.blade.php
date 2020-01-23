<!-- header -->
<header class="header shrink {{ $page->transparent ? 'header__style-02' : ''  }}">

  <div class="container">
    <div class="header__logo"><a href="/"><img src="/img/logo.png" class="img-responsive" alt=""/></a></div>
    <!-- consult-nav -->
    <nav class="consult-nav">
      <!-- consult-menu -->
      <ul class="consult-menu">
        <li{!! $page->getPath() == '' ? ' class="current-menu-item"':'' !!}><a href="/">Home</a></li>
        <li{!! $page->getPath() == '/sobre' ? ' class="current-menu-item"':'' !!}><a href="/sobre">Sobre</a></li>
        {{--<li{!! $page->getPath() == '/solucoes' ? ' class="current-menu-item"':'' !!}><a href="/solucoes">Soluções</a></li>
        <li{!! $page->getPath() == '/blog' ? ' class="current-menu-item"':'' !!}><a href="/blog">Blog</a></li>--}}
        <li{!! $page->getPath() == '/trabalhe-conosco' ? ' class="current-menu-item"':'' !!}><a href="/trabalhe-conosco">Trabalhe conosco</a></li>
        <li{!! $page->getPath() == '/contato' ? ' class="current-menu-item"':'' !!}><a href="/contato">Contato</a></li>
      </ul><!-- consult-menu -->
      
      <div class="navbar-toggle"><span></span><span></span><span></span></div>
    </nav><!-- End / consult-nav -->
    
  </div>
</header><!-- End / header -->