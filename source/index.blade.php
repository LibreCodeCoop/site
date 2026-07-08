@extends('_layouts.main')

@section('body')

  {{-- ==========================  HERO  ========================== --}}
  <section id="intro" class="lc-hero">
    <div class="lc-hero__inner">
      <p class="lc-eyebrow lc-hero__eyebrow" data-reveal="up">Cooperativa de tecnologia livre</p>

      <h1 data-hero-title>
        <span class="lc-line"><span>Tecnologia com</span></span>
        <span class="lc-line"><span class="lc-accent">transparência</span></span>
        <span class="lc-line"><span>e <span class="lc-accent">liberdade</span></span></span>
      </h1>

      <p class="lc-hero__lead" data-reveal="up">
        Somos uma cooperativa digital de especialistas em desenvolvimento de software livre.
      </p>

      <div class="lc-hero__actions" data-reveal="up">
        <a href="#why-us" class="lc-btn">Ver soluções <span class="lc-btn__arrow">→</span></a>
        <a href="{{ $page->baseUrl }}jobs" class="lc-btn lc-btn--ghost">Coopere conosco</a>
      </div>

      <div class="lc-terminal" data-reveal="up" aria-hidden="true">
        <div class="lc-terminal__bar">
          <i></i><i></i><i></i>
          <span>~/librecode</span>
        </div>
        <div class="lc-terminal__body">
          <span data-terminal><span class="p">$</span> whoami</span><span class="lc-caret"></span>
        </div>
      </div>
    </div>

    <div class="lc-scrollcue" aria-hidden="true">
      scroll
      <span></span>
    </div>
  </section>

  {{-- ==========================  PRINCÍPIOS (marquee)  ========================== --}}
  <section class="lc-principles" aria-label="Princípios do cooperativismo">
    <div class="lc-marquee">
      <div class="lc-marquee__track" data-marquee data-speed="60">
        <span>Adesão livre</span><span>Gestão democrática</span><span>Participação econômica</span><span>Autonomia</span><span>Educação &amp; formação</span><span>Intercooperação</span><span>Interesse pela comunidade</span>
        <span>Adesão livre</span><span>Gestão democrática</span><span>Participação econômica</span><span>Autonomia</span><span>Educação &amp; formação</span><span>Intercooperação</span><span>Interesse pela comunidade</span>
      </div>
    </div>
  </section>

  <main id="main">

    {{-- ==========================  QUEM SOMOS  ========================== --}}
    <section id="about" class="lc-section lc-section--ink">
      <div class="lc-shell">
        <div class="lc-head" data-reveal="up">
          <p class="lc-eyebrow lc-eyebrow--index"><b>01</b> / Quem somos</p>
          <h2>Duas ideias, um mesmo princípio: <span class="lc-accent">poder distribuído</span></h2>
          <p>Nossa forma de trabalhar e o software que construímos nascem da mesma convicção — decisões e código devem estar à vista de todos.</p>
        </div>

        <div class="lc-why" data-reveal="stagger">
          <article class="lc-why__card">
            <div class="lc-why__idx">01</div>
            <div class="lc-why__icon"><img src="{{ $page->baseUrl }}assets/images/coop.png" alt="Cooperativismo"></div>
            <h3>Por que uma cooperativa?</h3>
            <p>Cooperativas são organizações democráticas, cujas decisões são tomadas de forma coletiva e transparente e onde os cooperados contribuem equitativamente dentro de um princípio de intercooperação e trabalho em conjunto que potencializam a qualidade, produtividade e a economia de escala nos serviços.</p>
            <p>O movimento cooperativista trabalha para o desenvolvimento sustentável da comunidade na qual está inserido.</p>
          </article>

          <article class="lc-why__card">
            <div class="lc-why__idx">02</div>
            <div class="lc-why__icon"><img src="{{ $page->baseUrl }}assets/images/gnu.png" alt="Software livre / GNU"></div>
            <h3>Por que software livre?</h3>
            <p>Um projeto de licença livre é construído colaborativamente, de modo que está em constante crescimento e sendo constantemente testado e corrigido em suas atualizações. Por ser aberto, o código de um software livre é 100% auditável, permitindo identificar qualquer erro ou falha de segurança que possa deixar vulnerável os dados trafegados no sistema.</p>
            <p>Por isso, um software livre permite uma política de segurança de dados muito mais transparente do que um software proprietário.</p>
          </article>
        </div>
      </div>
    </section>

    {{-- ==========================  SOLUÇÕES  ========================== --}}
    <section id="why-us" class="lc-section lc-section--ink" style="padding-top:0">
      <div class="lc-shell">
        <div class="lc-head" data-reveal="up">
          <p class="lc-eyebrow lc-eyebrow--index"><b>02</b> / Soluções</p>
          <h2>Ferramentas livres, prontas para o seu contexto</h2>
          <p>Todas as nossas soluções podem ser customizadas e adaptadas às necessidades de cada cliente. Confira!</p>
        </div>

        <div class="lc-solutions">

          <article class="lc-solution" data-reveal="up" data-tilt-media>
            <div class="lc-solution__body">
              <span class="lc-solution__idx">01 — nuvem privada</span>
              <div class="lc-solution__logo"><img src="{{ $page->baseUrl }}assets/images/nextcloud/logo.png" alt="Nextcloud"></div>
              <h3>Nextcloud</h3>
              <p>Sua nuvem privada para armazenamento de documentos e colaboração eficiente para equipes de qualquer tamanho.</p>
              <a href="{{ $page->baseUrl }}nextcloud" class="lc-btn">Conheça <span class="lc-btn__arrow">→</span></a>
            </div>
            <div class="lc-solution__media">
              <img src="{{ $page->baseUrl }}assets/images/solucoes/nextcloud.png" alt="Nextcloud" data-media>
            </div>
          </article>

          <article class="lc-solution" data-reveal="up" data-tilt-media>
            <div class="lc-solution__body">
              <span class="lc-solution__idx">02 — assinatura digital</span>
              <div class="lc-solution__logo"><img src="{{ $page->baseUrl }}assets/images/logo/libresign.png" alt="LibreSign"></div>
              <h3>LibreSign</h3>
              <p>Plataforma completa para assinatura digital de documentos, com praticidade, segurança e validade jurídica.</p>
              <a href="https://libresign.coop/" target="_blank" rel="noopener" class="lc-btn">Conheça <span class="lc-btn__arrow">→</span></a>
            </div>
            <div class="lc-solution__media">
              <img src="{{ $page->baseUrl }}assets/images/logo/libresign.png" alt="LibreSign" data-media>
            </div>
          </article>

        </div>
      </div>
    </section>

    {{-- ==========================  CLIENTES  ========================== --}}
    <section id="clients" class="lc-section lc-section--paper">
      <div class="lc-shell">
        <div class="lc-head" data-reveal="up">
          <p class="lc-eyebrow lc-eyebrow--index"><b>03</b> / Clientes</p>
          <h2>Reconhecidos por quem constrói o país</h2>
          <p>Nossa expertise e a singularidade de nosso modelo de negócio são creditadas por diversos atores dos setores público, privado e do terceiro setor.</p>
        </div>
      </div>

      <div class="lc-clients-row lc-marquee" data-reveal="up">
        <div class="lc-marquee__track" data-marquee data-speed="34">
          @php
            $clients = [
              'prefeitura-nikiti.png','client-2.png','client-3.png','client-4.jpg',
              'client-5.png','client-6.png','nicbr.png','amperj.jpg'
            ];
          @endphp
          @foreach (array_merge($clients, $clients) as $c)
            <span class="lc-client"><img src="{{ $page->baseUrl }}assets/images/clients/{{ $c }}" alt="Cliente LibreCode"></span>
          @endforeach
        </div>
      </div>
    </section>

    {{-- ==========================  APOIE  ========================== --}}
    <section id="apoie" class="lc-section lc-section--ink">
      <div class="lc-shell">
        <div class="lc-head" data-reveal="up">
          <p class="lc-eyebrow lc-eyebrow--index"><b>04</b> / Apoie</p>
          <h2>Software livre se sustenta com <span class="lc-accent">comunidade</span></h2>
          <p>Se você utiliza ou deseja utilizar nossos produtos e gostaria de contribuir com o desenvolvimento deles, existem diversas formas de nos apoiar.</p>
        </div>

        <div class="lc-support" data-reveal="up">
          <div class="lc-support__main">
            <div class="lc-support__badge"><i class="fa fa-github" aria-hidden="true"></i></div>
            <h3>GitHub Sponsors</h3>
            <p>O GitHub Sponsors permite à comunidade de desenvolvedores apoiar financeiramente as pessoas e organizações que projetam, criam e mantêm os projetos de código aberto dos quais dependem — diretamente no GitHub.</p>
            <a href="https://github.com/sponsors/LibreSign" target="_blank" rel="noopener" class="lc-btn">Ir para o GitHub Sponsors <span class="lc-btn__arrow">→</span></a>
          </div>
          <aside class="lc-support__aside">
            <p># cada contribuição financia<br>&nbsp;&nbsp;correções, novas funcionalidades<br>&nbsp;&nbsp;e a manutenção de código<br>&nbsp;&nbsp;auditável e livre para todos.</p>
          </aside>
        </div>
      </div>
    </section>

  </main>

  @include('_partials.contact_form')

@endsection
