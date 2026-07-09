@extends('_layouts.main')

@section('body')

@extends('_layouts.header')

{{-- ==========================  HERO  ========================== --}}
<section id="intro" class="lc-hero nc-hero">
  <div class="lc-hero__inner">
    <p class="lc-eyebrow lc-hero__eyebrow" data-reveal="up">Nuvem privada · hub de aplicações</p>

    <h1 data-hero-title>
      <span class="lc-line"><span>Gestão em</span></span>
      <span class="lc-line"><span class="lc-accent">nuvem exclusiva</span></span>
    </h1>

    <p class="lc-hero__lead" data-reveal="up">
      O <b>Nextcloud</b> é muito mais do que uma nuvem: um hub de aplicações com tudo o que a sua
      operação precisa para trabalhar em conjunto — com os dados sob o seu controle.
    </p>

    <div class="lc-hero__actions" data-reveal="up">
      <a href="#nc-showcase" class="lc-btn">Conheça o hub <span class="lc-btn__arrow">→</span></a>
      <a href="https://t.me/LibreCodeCoop" target="_blank" rel="noopener" class="lc-btn lc-btn--ghost">Agendar demonstração</a>
    </div>
  </div>

  <div class="lc-scrollcue nc-scrollcue" aria-hidden="true">
    role para explorar
    <span></span>
  </div>
</section>

<main id="main">

  {{-- ==========================  SHOWCASE HORIZONTAL  ========================== --}}
  <section id="nc-showcase" class="nc-showcase" aria-label="Módulos do Nextcloud">
    <div class="nc-track" data-nc-track>

      <article class="nc-panel nc-panel--intro" data-nc-panel tabindex="0">
        <div class="nc-panel__inner nc-intro">
          <p class="lc-eyebrow" data-nc-text>O tour</p>
          <h2 class="nc-intro__title" data-nc-text>Um hub, <span class="lc-accent">módulo por módulo</span></h2>
          <p class="nc-intro__lead" data-nc-text>
            Cinco frentes de trabalho reunidas em um só lugar. Continue rolando para percorrer cada uma.
          </p>
          <p class="nc-intro__hint" data-nc-text aria-hidden="true">arraste / role →</p>
        </div>
      </article>

      <article class="nc-panel" data-nc-panel tabindex="0">
        <div class="nc-panel__inner">
          <div class="nc-panel__text">
            <span class="nc-panel__idx" data-nc-text>01 · arquivos</span>
            <h2 data-nc-text>Gestão de arquivos</h2>
            <p data-nc-text>Organize documentos e pastas de forma segura e colaborativa, com compartilhamento controlado por permissões e acesso de qualquer lugar.</p>
          </div>
          <figure class="nc-window" data-nc-media>
            <span class="nc-window__bar" aria-hidden="true"><i></i><i></i><i></i><em>Arquivos — Nextcloud</em></span>
            <img loading="lazy" src="{{ $page->baseUrl }}assets/images/nextcloud/arquivos.png" alt="Tela de gestão de arquivos do Nextcloud">
          </figure>
        </div>
      </article>

      <article class="nc-panel" data-nc-panel tabindex="0">
        <div class="nc-panel__inner">
          <div class="nc-panel__text">
            <span class="nc-panel__idx" data-nc-text>02 · histórico</span>
            <h2 data-nc-text>Log de alterações</h2>
            <p data-nc-text>Acompanhe o histórico completo de cada arquivo — o que mudou, quando e por quem — com total rastreabilidade e transparência.</p>
          </div>
          <figure class="nc-window" data-nc-media>
            <span class="nc-window__bar" aria-hidden="true"><i></i><i></i><i></i><em>Atividades — Nextcloud</em></span>
            <img loading="lazy" src="{{ $page->baseUrl }}assets/images/nextcloud/logs.png" alt="Tela de log de alterações do Nextcloud">
          </figure>
        </div>
      </article>

      <article class="nc-panel" data-nc-panel tabindex="0">
        <div class="nc-panel__inner">
          <div class="nc-panel__text">
            <span class="nc-panel__idx" data-nc-text>03 · usuários</span>
            <h2 data-nc-text>Grupos e permissões</h2>
            <p data-nc-text>Crie grupos, defina papéis e ajuste permissões de acesso com granularidade — cada pessoa vê exatamente o que precisa.</p>
          </div>
          <figure class="nc-window" data-nc-media>
            <span class="nc-window__bar" aria-hidden="true"><i></i><i></i><i></i><em>Usuários — Nextcloud</em></span>
            <img loading="lazy" src="{{ $page->baseUrl }}assets/images/nextcloud/usuarios.png" alt="Tela de gestão de usuários do Nextcloud">
          </figure>
        </div>
      </article>

      <article class="nc-panel" data-nc-panel tabindex="0">
        <div class="nc-panel__inner">
          <div class="nc-panel__text">
            <span class="nc-panel__idx" data-nc-text>04 · agenda</span>
            <h2 data-nc-text>Calendários e agenda</h2>
            <p data-nc-text>Monte agendas para cada necessidade, associe participantes e mantenha a equipe sincronizada — tudo integrado ao restante do hub.</p>
          </div>
          <figure class="nc-window" data-nc-media>
            <span class="nc-window__bar" aria-hidden="true"><i></i><i></i><i></i><em>Agenda — Nextcloud</em></span>
            <img loading="lazy" src="{{ $page->baseUrl }}assets/images/nextcloud/agenda.png" alt="Tela de agenda do Nextcloud">
          </figure>
        </div>
      </article>

      <article class="nc-panel" data-nc-panel tabindex="0">
        <div class="nc-panel__inner">
          <div class="nc-panel__text">
            <span class="nc-panel__idx" data-nc-text>05 · documentos</span>
            <h2 data-nc-text>Edição online colaborativa</h2>
            <p data-nc-text>Edite textos, planilhas e apresentações direto no navegador, em tempo real e a várias mãos — sem instalar nada, sem perder o controle dos dados.</p>
          </div>
          <figure class="nc-window" data-nc-media>
            <span class="nc-window__bar" aria-hidden="true"><i></i><i></i><i></i><em>Documentos — Nextcloud</em></span>
            <img loading="lazy" src="{{ $page->baseUrl }}assets/images/nextcloud/onlyoffice.png" alt="Tela de edição de documentos online do Nextcloud">
          </figure>
        </div>
      </article>

      <article class="nc-panel nc-panel--outro" data-nc-panel tabindex="0">
        <div class="nc-panel__inner nc-outro">
          <p class="lc-eyebrow" data-nc-text>Fim do tour</p>
          <h2 data-nc-text>Pronto para ter o seu <span class="lc-accent">próprio hub</span>?</h2>
          <p data-nc-text>Hospedagem no Brasil, suporte em português e dados sob o seu controle.</p>
          <a href="https://t.me/LibreCodeCoop" target="_blank" rel="noopener" class="lc-btn" data-nc-text>Agende uma demonstração <span class="lc-btn__arrow">→</span></a>
        </div>
      </article>

    </div>

    <div class="nc-rail" data-nc-rail aria-hidden="true">
      <span class="nc-rail__label" data-nc-rail-label>o tour</span>
      <span class="nc-rail__dots">
        <b class="is-active"></b><b></b><b></b><b></b><b></b><b></b><b></b>
      </span>
    </div>
  </section>

  {{-- ==========================  E MUITO MAIS  ========================== --}}
  <section id="nc-more" class="lc-section lc-section--ink nc-more-section">
    <div class="lc-shell">
      <div class="lc-head" data-reveal="up">
        <p class="lc-eyebrow lc-eyebrow--index"><b>+</b> / E muito mais</p>
        <h2>Um app para cada frente da sua operação</h2>
        <p>Além dos módulos essenciais, o Nextcloud reúne um ecossistema de aplicações prontas para o dia a dia da equipe.</p>
      </div>

      <div class="nc-more" data-reveal="stagger">
        <article class="nc-more__card">
          <span class="nc-more__icon"><ion-icon name="phone-portrait-outline"></ion-icon></span>
          <h3>App para celular</h3>
          <p>Seus dados na palma da mão, a qualquer hora e em qualquer lugar.</p>
        </article>
        <article class="nc-more__card">
          <span class="nc-more__icon"><ion-icon name="chatbubbles-outline"></ion-icon></span>
          <h3>Chat</h3>
          <p>Conversas pessoais ou direto dentro dos documentos.</p>
        </article>
        <article class="nc-more__card">
          <span class="nc-more__icon"><ion-icon name="videocam-outline"></ion-icon></span>
          <h3>Chamada de vídeo</h3>
          <p>Videoconferências com a equipe, sem depender de terceiros.</p>
        </article>
        <article class="nc-more__card">
          <span class="nc-more__icon"><ion-icon name="key-outline"></ion-icon></span>
          <h3>Criptografia</h3>
          <p>Dados criptografados e invioláveis de ponta a ponta.</p>
        </article>
        <article class="nc-more__card">
          <span class="nc-more__icon"><ion-icon name="grid-outline"></ion-icon></span>
          <h3>Gestão de atividades</h3>
          <p>Quadros Kanban para controlar fluxos de produção.</p>
        </article>
        <article class="nc-more__card">
          <span class="nc-more__icon"><ion-icon name="list-outline"></ion-icon></span>
          <h3>Enquetes</h3>
          <p>Crie e compartilhe enquetes para consulta interna ou externa.</p>
        </article>
        <article class="nc-more__card">
          <span class="nc-more__icon"><ion-icon name="clipboard-outline"></ion-icon></span>
          <h3>Formulários</h3>
          <p>Formulários para a equipe responder ou compartilhar com clientes.</p>
        </article>
        <article class="nc-more__card">
          <span class="nc-more__icon"><ion-icon name="finger-print-outline"></ion-icon></span>
          <h3>Gestor de senhas</h3>
          <p>Guarde e organize suas senhas de forma segura.</p>
        </article>
      </div>
    </div>
  </section>

  {{-- ==========================  CTA FINAL  ========================== --}}
  <section id="nc-cta" class="lc-section lc-section--paper nc-cta">
    <div class="lc-shell">
      <div class="nc-cta__box" data-reveal="up">
        <h2>Gostou? Agende uma demonstração conosco</h2>
        <p>Mostramos o Nextcloud rodando e desenhamos a implantação sob medida para a sua operação.</p>
        <a href="https://t.me/LibreCodeCoop" target="_blank" rel="noopener" class="lc-btn">Falar no Telegram <span class="lc-btn__arrow">→</span></a>
      </div>
      <p class="nc-trademark">Nextcloud é uma marca registrada de Nextcloud GmbH.</p>
    </div>
  </section>

</main>
@endsection
