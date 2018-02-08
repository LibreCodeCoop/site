<!-- header -->
<header class="header {{ $page->transparent ? 'header__style-02' : ''  }}">
  <style>
#forkongithub a {
	background: #000;
	color: #fff;
	text-decoration: none;
	font-family: arial, sans-serif;
	text-align: center;
	font-weight: bold;
	padding: 5px 40px;
	font-size: 1rem;
	line-height: 2rem;
	position: relative;
	transition: 0.5s;
}

#forkongithub a:hover {
	background: #c11;
	color: #fff;
}

#forkongithub a::before, #forkongithub a::after {
	content: "";
	width: 100%;
	display: block;
	position: absolute;
	top: 1px;
	left: 0;
	height: 1px;
	background: #fff;
}

#forkongithub a::after {
	bottom: 1px;
	top: auto;
}

@media screen and (min-width:800px) {
	#forkongithub {
		position: fixed;
		display: block;
		top: 0;
		right: 0;
		width: 200px;
		overflow: hidden;
		height: 200px;
		z-index: 9999;
	}
	#forkongithub a {
		width: 200px;
		position: absolute;
		top: 60px;
		right: -60px;
		transform: rotate(45deg);
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		-moz-transform: rotate(45deg);
		-o-transform: rotate(45deg);
		box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.8);
        box-sizing: unset;
	}
}
</style>
  <span id="forkongithub"><a
    href="https://github.com/LyseonTech/site">Fork me on GitHub</a></span>
  <div class="container">
    <div class="header__logo"><a href="/"><img src="/img/logo.png" alt=""/></a></div>
    <!-- consult-nav -->
    <nav class="consult-nav">
      <!-- consult-menu -->
      <ul class="consult-menu">
        <li{!! $page->getPath() == '' ? ' class="current-menu-item"':'' !!}><a href="/">Home</a></li>
        <li{!! $page->getPath() == '/sobre' ? ' class="current-menu-item"':'' !!}><a href="/sobre">Sobre</a></li>
        <li{!! $page->getPath() == '/solucoes' ? ' class="current-menu-item"':'' !!}><a href="/solucoes">Soluções</a></li>
        {{--<li{!! $page->getPath() == '/blog' ? ' class="current-menu-item"':'' !!}><a href="/blog">Blog</a></li>--}}
        <li{!! $page->getPath() == '/trabalhe-conosco' ? ' class="current-menu-item"':'' !!}><a href="/trabalhe-conosco">Trabalhe conosco</a></li>
        <li{!! $page->getPath() == '/contato' ? ' class="current-menu-item"':'' !!}><a href="/contato">Contato</a></li>
      </ul><!-- consult-menu -->
      
      <div class="navbar-toggle"><span></span><span></span><span></span></div>
    </nav><!-- End / consult-nav -->
    
  </div>
</header><!-- End / header -->