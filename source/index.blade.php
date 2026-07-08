---
title: LibreCode — Cooperativa de Software Livre
description: Cooperativa de tecnologia especializada em soluções corporativas com software livre. Nuvem privada, gestão, CRM, atendimento e automação com hospedagem no Brasil.
---

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

    {{-- ==========================  DIFERENCIAIS  ========================== --}}
    <section id="diferenciais" class="lc-section lc-section--ink" style="padding-top:0">
      <div class="lc-shell">
        <div class="lc-head" data-reveal="up">
          <p class="lc-eyebrow lc-eyebrow--index"><b>02</b> / Por que a LibreCode</p>
          <h2>Controle, autonomia e <span class="lc-accent">dados no Brasil</span></h2>
          <p>Unimos experiência técnica e valores cooperativistas para entregar soluções úteis, seguras e sustentáveis — sem prender a sua operação a um fornecedor.</p>
        </div>

        <div class="lc-diff" data-reveal="stagger">
          <article class="lc-diff__card">
            <div class="lc-diff__icon"><i class="fa fa-server" aria-hidden="true"></i></div>
            <h3>Hospedagem própria</h3>
            <p>Infraestrutura brasileira com controle e privacidade. Seus dados ficam no Brasil.</p>
          </article>
          <article class="lc-diff__card">
            <div class="lc-diff__icon"><i class="fa fa-users" aria-hidden="true"></i></div>
            <h3>Suporte especializado</h3>
            <p>Atendimento direto, ágil e no seu idioma, focado no que a sua operação precisa.</p>
          </article>
          <article class="lc-diff__card">
            <div class="lc-diff__icon"><i class="fa fa-cogs" aria-hidden="true"></i></div>
            <h3>Customização sob demanda</h3>
            <p>Adaptamos cada solução ao que a sua operação realmente precisa.</p>
          </article>
          <article class="lc-diff__card">
            <div class="lc-diff__icon"><i class="fa fa-lock" aria-hidden="true"></i></div>
            <h3>Dados sob seu controle</h3>
            <p>Você decide onde os dados ficam e para onde migrar, sem dependência de fornecedor único.</p>
          </article>
          <article class="lc-diff__card">
            <div class="lc-diff__icon"><i class="fa fa-shield" aria-hidden="true"></i></div>
            <h3>Conformidade com a LGPD</h3>
            <p>Soluções pensadas para privacidade desde o início e alinhadas à LGPD.</p>
          </article>
          <article class="lc-diff__card">
            <div class="lc-diff__icon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
            <h3>Sem dependência de Big Techs</h3>
            <p>Independência tecnológica com software livre e sem surpresas no contrato.</p>
          </article>
        </div>
      </div>
    </section>

    {{-- ==========================  SOLUÇÕES  ========================== --}}
    <section id="why-us" class="lc-section lc-section--ink" style="padding-top:0">
      <div class="lc-shell">
        <div class="lc-head" data-reveal="up">
          <p class="lc-eyebrow lc-eyebrow--index"><b>03</b> / Soluções</p>
          <h2>Ferramentas livres, prontas para o seu contexto</h2>
          <p>Todas as nossas soluções podem ser customizadas e adaptadas às necessidades de cada cliente. Confira!</p>
        </div>

        <div class="lc-solutions">

          <article class="lc-solution" data-reveal="up" data-tilt-media>
            <div class="lc-solution__body">
              <span class="lc-solution__idx">01 — nuvem privada</span>
              <h3>Nextcloud</h3>
              <p>Sua nuvem privada para armazenamento de documentos e colaboração eficiente para equipes de qualquer tamanho.</p>
              <a href="{{ $page->baseUrl }}nextcloud" class="lc-btn">Conheça <span class="lc-btn__arrow">→</span></a>
            </div>
            <div class="lc-solution__media">
              <img loading="lazy" src="{{ $page->baseUrl }}assets/images/solucoes/nextcloud.png" alt="Nextcloud — nuvem privada" data-media>
            </div>
          </article>

          <article class="lc-solution lc-solution--dpg" data-reveal="up" data-tilt-media>
            <div class="lc-solution__body">
              <span class="lc-solution__idx">02 — assinatura digital</span>
              <h3>LibreSign</h3>
              <p>Plataforma completa para assinatura digital de documentos, com praticidade, segurança e validade jurídica.</p>

              <a class="lc-dpg" href="https://www.digitalpublicgoods.net/r/libresign" target="_blank" rel="noopener"
                 title="Ver o registro do LibreSign na Digital Public Goods Alliance">
                <img class="lc-dpg__seal" loading="lazy"
                     src="{{ $page->baseUrl }}assets/images/dpg/dpg-badge-w.svg"
                     alt="Selo Digital Public Good (Bem Público Digital)">
                <span class="lc-dpg__text">
                  <b>Reconhecido como Bem Público Digital</b>
                  <span class="lc-dpg__meta">Verificado pela Digital Public Goods Alliance</span>
                </span>
                <span class="lc-dpg__go" aria-hidden="true">↗</span>
              </a>

              <a href="https://libresign.coop/" target="_blank" rel="noopener" class="lc-btn">Conheça <span class="lc-btn__arrow">→</span></a>
            </div>
            <div class="lc-solution__media">
              <img loading="lazy" src="{{ $page->baseUrl }}assets/images/logo/libresign.png" alt="LibreSign — assinatura digital" data-media>
            </div>
          </article>

        </div>

        <div class="lc-tools-head" data-reveal="up">
          <h3>E todo o ecossistema livre que a sua operação precisa</h3>
          <p>Implantamos, hospedamos e damos suporte a uma ampla gama de aplicações livres — da gestão ao ensino.</p>
        </div>

        <div class="lc-tools" data-reveal="stagger">
          <article class="lc-tool">
            <div class="lc-tool__logo"><img loading="lazy" src="{{ $page->baseUrl }}assets/images/solucoes/matomo.png" alt="Logo do Matomo"></div>
            <h4>Matomo</h4>
            <p>Analytics web com total privacidade e dados sob seu controle.</p>
          </article>
          <article class="lc-tool">
            <div class="lc-tool__logo"><img loading="lazy" src="{{ $page->baseUrl }}assets/images/solucoes/suitecrm.png" alt="Logo do SuiteCRM"></div>
            <h4>SuiteCRM</h4>
            <p>Gestão de relacionamento com clientes, sem licença por usuário.</p>
          </article>
          <article class="lc-tool">
            <div class="lc-tool__logo"><img loading="lazy" src="{{ $page->baseUrl }}assets/images/solucoes/mautic.png" alt="Logo do Mautic"></div>
            <h4>Mautic</h4>
            <p>Automação de marketing para campanhas e gestão de leads.</p>
          </article>
          <article class="lc-tool">
            <div class="lc-tool__logo"><img loading="lazy" src="{{ $page->baseUrl }}assets/images/solucoes/akaunting.png" alt="Logo do Akaunting"></div>
            <h4>Akaunting</h4>
            <p>Gestão financeira e contábil online para a sua organização.</p>
          </article>
          <article class="lc-tool">
            <div class="lc-tool__logo"><img loading="lazy" src="{{ $page->baseUrl }}assets/images/solucoes/kimai.png" alt="Logo do Kimai"></div>
            <h4>Kimai</h4>
            <p>Controle de tempo e apontamento de horas trabalhadas.</p>
          </article>
          <article class="lc-tool">
            <div class="lc-tool__logo"><img loading="lazy" src="{{ $page->baseUrl }}assets/images/solucoes/limesurvey.png" alt="Logo do LimeSurvey"></div>
            <h4>LimeSurvey</h4>
            <p>Pesquisas e formulários avançados com dados soberanos.</p>
          </article>
          <article class="lc-tool">
            <div class="lc-tool__logo"><img loading="lazy" src="{{ $page->baseUrl }}assets/images/solucoes/yourls.png" alt="Logo do Yourls"></div>
            <h4>Yourls</h4>
            <p>Encurtador de URLs próprio, com métricas e sob seu domínio.</p>
          </article>
          <article class="lc-tool">
            <div class="lc-tool__logo"><img loading="lazy" src="{{ $page->baseUrl }}assets/images/solucoes/moodle.png" alt="Logo do Moodle"></div>
            <h4>Moodle</h4>
            <p>Ambiente completo de ensino a distância e cursos online.</p>
          </article>
          <article class="lc-tool">
            <div class="lc-tool__logo"><img loading="lazy" src="{{ $page->baseUrl }}assets/images/solucoes/ieducar.png" alt="Logo do iEducar"></div>
            <h4>iEducar</h4>
            <p>Gestão escolar pública, da matrícula ao histórico acadêmico.</p>
          </article>
          <article class="lc-tool">
            <div class="lc-tool__logo"><img loading="lazy" src="{{ $page->baseUrl }}assets/images/solucoes/ojs.png" alt="Logo do OJS"></div>
            <h4>OJS</h4>
            <p>Publicação e gestão de periódicos científicos (Open Journal Systems).</p>
          </article>
        </div>

        <div class="lc-tools-cta" data-reveal="up">
          <p>Precisa de algo específico? Desenhamos a arquitetura sob medida para o seu caso.</p>
          <a href="#contact" class="lc-btn">Solicitar diagnóstico <span class="lc-btn__arrow">→</span></a>
        </div>
      </div>
    </section>

    {{-- ==========================  CLIENTES  ========================== --}}
    <section id="clients" class="lc-section lc-section--paper">
      <div class="lc-shell">
        <div class="lc-head" data-reveal="up">
          <p class="lc-eyebrow lc-eyebrow--index"><b>04</b> / Clientes</p>
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
            <span class="lc-client"><img loading="lazy" src="{{ $page->baseUrl }}assets/images/clients/{{ $c }}" alt="Cliente LibreCode"></span>
          @endforeach
        </div>
      </div>
    </section>

    {{-- ==========================  APOIE  ========================== --}}
    <section id="apoie" class="lc-section lc-section--ink">
      <div class="lc-shell">
        <div class="lc-head" data-reveal="up">
          <p class="lc-eyebrow lc-eyebrow--index"><b>05</b> / Apoie</p>
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
