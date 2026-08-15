<header id="header" class="fixed-top">
    <div class="container">
        <div class="logo">
            <a href="{{ locale_path($page, $page->baseUrl) }}" class="scrollto" aria-label="LibreCode — página inicial">
                <img src="{{ $page->baseUrl }}assets/images/logo/librecode.png" alt="LibreCode" class="img-fluid">
            </a>
        </div>
        <div class="lc-header__actions">
            <nav class="main-nav d-none d-lg-block" aria-label="Navegação principal">
                <ul>
                    <li><a href="{{ locale_path($page, $page->baseUrl) }}#about">Quem somos</a></li>
                    <li><a href="{{ locale_path($page, $page->baseUrl) }}#why-us">Soluções</a></li>
                    <li><a href="{{ locale_path($page, $page->baseUrl) }}#clients">Clientes</a></li>
                    <li><a href="{{ locale_path($page, $page->baseUrl) }}#apoie">Apoie</a></li>
                    <li><a href="{{ locale_path($page, $page->baseUrl) }}#contact">Contato</a></li>
                    <li><a href="{{ locale_path($page, $page->baseUrl) }}posts">Blog</a></li>
                    <li><a href="{{ locale_path($page, $page->baseUrl) }}jobs">Coopere Conosco</a></li>
                </ul>
            </nav>
            <button type="button" class="lc-theme-toggle" data-theme-toggle aria-pressed="false" title="Alternar tema" aria-label="Alternar entre tema claro e escuro">
                <i class="fa fa-sun-o" aria-hidden="true"></i>
                <i class="fa fa-moon-o" aria-hidden="true"></i>
            </button>
        </div>
    </div>
</header>
