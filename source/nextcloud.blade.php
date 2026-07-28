---
title: Nextcloud — Nuvem Privada e Colaborativa | LibreCode
description: Arquivos, documentos, agenda, chamadas e colaboração em uma nuvem privada com hospedagem no Brasil, suporte em português e dados sob o seu controle.
---

@extends('_layouts.main')

@section('body')

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

    <nav class="nc-hero-nav" aria-label="Navegação desta página" data-reveal="up">
      <span>Ir para</span>
      <a href="#nc-showcase">Recursos</a>
      <a href="#nc-why">Benefícios</a>
      <a href="#nc-managed">Como funciona</a>
      <a href="#pricing">Planos</a>
      <a href="#nc-faq">FAQ</a>
    </nav>
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
            <a class="nc-window__frame glightbox" href="{{ $page->baseUrl }}assets/images/nextcloud/arquivos.png" data-gallery="nc-showcase" aria-label="Ampliar imagem: Gestão de arquivos">
              <img loading="lazy" draggable="false" src="{{ $page->baseUrl }}assets/images/nextcloud/arquivos.png" alt="Tela de gestão de arquivos do Nextcloud">
              <span class="nc-window__zoom" aria-hidden="true"><ion-icon name="expand-outline"></ion-icon></span>
            </a>
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
            <a class="nc-window__frame glightbox" href="{{ $page->baseUrl }}assets/images/nextcloud/logs.png" data-gallery="nc-showcase" aria-label="Ampliar imagem: Log de alterações">
              <img loading="lazy" draggable="false" src="{{ $page->baseUrl }}assets/images/nextcloud/logs.png" alt="Tela de log de alterações do Nextcloud">
              <span class="nc-window__zoom" aria-hidden="true"><ion-icon name="expand-outline"></ion-icon></span>
            </a>
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
            <a class="nc-window__frame glightbox" href="{{ $page->baseUrl }}assets/images/nextcloud/usuarios.png" data-gallery="nc-showcase" aria-label="Ampliar imagem: Grupos e permissões">
              <img loading="lazy" draggable="false" src="{{ $page->baseUrl }}assets/images/nextcloud/usuarios.png" alt="Tela de gestão de usuários do Nextcloud">
              <span class="nc-window__zoom" aria-hidden="true"><ion-icon name="expand-outline"></ion-icon></span>
            </a>
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
            <a class="nc-window__frame glightbox" href="{{ $page->baseUrl }}assets/images/nextcloud/agenda.png" data-gallery="nc-showcase" aria-label="Ampliar imagem: Calendários e agenda">
              <img loading="lazy" draggable="false" src="{{ $page->baseUrl }}assets/images/nextcloud/agenda.png" alt="Tela de agenda do Nextcloud">
              <span class="nc-window__zoom" aria-hidden="true"><ion-icon name="expand-outline"></ion-icon></span>
            </a>
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
            <a class="nc-window__frame glightbox" href="{{ $page->baseUrl }}assets/images/nextcloud/onlyoffice.png" data-gallery="nc-showcase" aria-label="Ampliar imagem: Edição online colaborativa">
              <img loading="lazy" draggable="false" src="{{ $page->baseUrl }}assets/images/nextcloud/onlyoffice.png" alt="Tela de edição de documentos online do Nextcloud">
              <span class="nc-window__zoom" aria-hidden="true"><ion-icon name="expand-outline"></ion-icon></span>
            </a>
          </figure>
        </div>
      </article>

      <article class="nc-panel nc-panel--outro" data-nc-panel tabindex="0">
        <div class="nc-panel__inner nc-outro">
          <p class="lc-eyebrow" data-nc-text>Fim do tour</p>
          <h2 data-nc-text>Pronto para ter o seu <span class="lc-accent">próprio hub</span>?</h2>
          <p data-nc-text>Infraestrutura dedicada, suporte humano e dados sob o seu controle.</p>
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
          <p>Proteção dos dados em trânsito e recursos adicionais de criptografia configurados conforme a necessidade.</p>
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

  <section id="nc-why" class="lc-section lc-section--paper nc-why">
    <div class="lc-shell">
      <div class="lc-head" data-reveal="up">
        <p class="lc-eyebrow lc-eyebrow--index"><b>01</b> / Uma escolha com propósito</p>
        <h2>Produtividade sem abrir mão da autonomia</h2>
        <p>Sua equipe ganha um espaço integrado para trabalhar, enquanto a organização mantém o controle sobre os próprios dados e sobre o futuro da plataforma.</p>
      </div>

      <div class="nc-values" data-reveal="stagger">
        <article class="nc-value">
          <span class="nc-value__number">01</span>
          <ion-icon name="shield-checkmark-outline" aria-hidden="true"></ion-icon>
          <h3>Soberania digital</h3>
          <p>Arquivos, conversas e rotinas de trabalho ficam em uma infraestrutura privada, com hospedagem no Brasil e sem dependência de uma big tech.</p>
        </article>
        <article class="nc-value">
          <span class="nc-value__number">02</span>
          <ion-icon name="eye-off-outline" aria-hidden="true"></ion-icon>
          <h3>Privacidade por princípio</h3>
          <p>Sem publicidade ou exploração comercial do conteúdo. O acesso é definido pela sua organização, com recursos alinhados às práticas de privacidade e à LGPD.</p>
        </article>
        <article class="nc-value">
          <span class="nc-value__number">03</span>
          <ion-icon name="people-outline" aria-hidden="true"></ion-icon>
          <h3>Economia solidária</h3>
          <p>Ao contratar a LibreCode, sua organização fortalece uma cooperativa de profissionais que desenvolve e sustenta tecnologia livre.</p>
        </article>
      </div>
    </div>
  </section>

  <section id="nc-use-cases" class="lc-section lc-section--ink nc-use-cases">
    <div class="lc-shell">
      <div class="lc-head" data-reveal="up">
        <p class="lc-eyebrow lc-eyebrow--index"><b>02</b> / Para quem é</p>
        <h2>Uma nuvem que acompanha diferentes formas de organização</h2>
        <p>O Nextcloud se adapta tanto a equipes em crescimento quanto a operações que lidam diariamente com informações sensíveis.</p>
      </div>

      <div class="nc-audiences" data-reveal="stagger">
        <article class="nc-audience">
          <span class="nc-audience__icon"><ion-icon name="business-outline"></ion-icon></span>
          <div>
            <h3>Equipes e empresas</h3>
            <p>Centralize arquivos, reuniões, agendas e edição colaborativa, reduzindo a dispersão entre várias plataformas.</p>
          </div>
        </article>
        <article class="nc-audience">
          <span class="nc-audience__icon"><ion-icon name="git-network-outline"></ion-icon></span>
          <div>
            <h3>Cooperativas e coletivos</h3>
            <p>Organize decisões e processos em ferramentas compatíveis com autonomia, colaboração e gestão democrática.</p>
          </div>
        </article>
        <article class="nc-audience">
          <span class="nc-audience__icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
          <div>
            <h3>Operações com dados sensíveis</h3>
            <p>Controle acessos, compartilhamentos e histórico de atividades em áreas como saúde, contabilidade e serviços jurídicos.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section id="nc-managed" class="lc-section lc-section--paper nc-managed">
    <div class="lc-shell">
      <div class="nc-managed__layout">
        <div class="lc-head" data-reveal="up">
          <p class="lc-eyebrow lc-eyebrow--index"><b>03</b> / Nextcloud com a LibreCode</p>
          <h2>A tecnologia é livre. A operação não precisa ficar por sua conta.</h2>
          <p>Cuidamos da implantação e da sustentação para sua equipe se concentrar no trabalho, não na administração de servidores.</p>
          <a href="https://t.me/LibreCodeCoop" target="_blank" rel="noopener" class="lc-btn">Planejar minha implantação <span class="lc-btn__arrow">→</span></a>
        </div>

        <ol class="nc-managed__steps" data-reveal="stagger">
          <li>
            <span>01</span>
            <div>
              <h3>Diagnóstico e dimensionamento</h3>
              <p>Entendemos número de pessoas, volume de dados, integrações e requisitos para desenhar o ambiente adequado.</p>
            </div>
          </li>
          <li>
            <span>02</span>
            <div>
              <h3>Implantação e migração assistida</h3>
              <p>Configuramos a plataforma e planejamos a entrada de arquivos, contatos e calendários com a sua equipe.</p>
            </div>
          </li>
          <li>
            <span>03</span>
            <div>
              <h3>Atualizações, backups e suporte</h3>
              <p>Mantemos a infraestrutura e atendemos em português, com contato direto com uma equipe técnica.</p>
            </div>
          </li>
        </ol>
      </div>
    </div>
  </section>

  {{-- ==========================  PLANOS  ========================== --}}
  <section id="pricing" class="lc-section lc-section--ink nc-pricing">
    <div class="lc-shell">
      <div class="lc-head nc-pricing__head" data-reveal="up">
        <p class="lc-eyebrow lc-eyebrow--index"><b>04</b> / Planos</p>
        <h2>Nuvem soberana para sua organização</h2>
        <p>Privacidade, código aberto e gestão cooperativa em planos que crescem com a sua equipe.</p>
        <span class="nc-pricing__setup">
          <ion-icon name="sparkles-outline" aria-hidden="true"></ion-icon>
          Sem taxa de implantação
        </span>
      </div>

      <div class="nc-plan-table-wrap" data-reveal="up" tabindex="0" role="region" aria-label="Comparação dos planos Nextcloud">
        <table class="nc-plan-table">
          <caption>Recursos e valores dos planos Nextcloud da LibreCode</caption>
          <thead>
            <tr>
              <th scope="col">Recursos</th>
              <th scope="col">Básico</th>
              <th scope="col" class="nc-plan-table__featured">
                <span>Recomendado</span>
                Pro
              </th>
              <th scope="col">Empresas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Usuários</th>
              <td><strong class="nc-plan-table__included-text">Ilimitados</strong></td>
              <td><strong class="nc-plan-table__included-text">Ilimitados</strong></td>
              <td><strong class="nc-plan-table__included-text">Ilimitados</strong></td>
            </tr>
            <tr>
              <th scope="row">Arquivos</th>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
            </tr>
            <tr>
              <th scope="row">Quadro de tarefas</th>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
            </tr>
            <tr>
              <th scope="row">Gestão de contatos</th>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
            </tr>
            <tr>
              <th scope="row">Calendário</th>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
            </tr>
            <tr>
              <th scope="row">Formulários</th>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
            </tr>
            <tr>
              <th scope="row">Assinaturas ilimitadas</th>
              <td><span class="nc-plan-table__dash" aria-label="Não incluído">—</span></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
            </tr>
            <tr>
              <th scope="row">Editor de documentos</th>
              <td><span class="nc-plan-table__dash" aria-label="Não incluído">—</span></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
            </tr>
            <tr>
              <th scope="row">Videoconferência</th>
              <td><span class="nc-plan-table__dash" aria-label="Não incluído">—</span></td>
              <td><span class="nc-plan-table__dash" aria-label="Não incluído">—</span></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
            </tr>
            <tr>
              <th scope="row">Suporte e consultoria</th>
              <td><span class="nc-plan-table__dash" aria-label="Não incluído">—</span></td>
              <td><span class="nc-plan-table__dash" aria-label="Não incluído">—</span></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
            </tr>
            <tr>
              <th scope="row">Domínio customizado</th>
              <td><span class="nc-plan-table__dash" aria-label="Não incluído">—</span></td>
              <td><span class="nc-plan-table__dash" aria-label="Não incluído">—</span></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
            </tr>
            <tr>
              <th scope="row">Logo customizada</th>
              <td><span class="nc-plan-table__dash" aria-label="Não incluído">—</span></td>
              <td><span class="nc-plan-table__dash" aria-label="Não incluído">—</span></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
            </tr>
            <tr>
              <th scope="row">Cores customizadas</th>
              <td><span class="nc-plan-table__dash" aria-label="Não incluído">—</span></td>
              <td><span class="nc-plan-table__dash" aria-label="Não incluído">—</span></td>
              <td><ion-icon name="checkmark-circle" aria-label="Incluído"></ion-icon></td>
            </tr>
          </tbody>
          <tbody class="nc-plan-table__details">
            <tr>
              <th scope="row">Armazenamento</th>
              <td><strong>10 GB</strong></td>
              <td><strong>120 GB</strong></td>
              <td><strong>800 GB</strong></td>
            </tr>
            <tr>
              <th scope="row">Mensalidade no plano anual</th>
              <td><strong>R$ 150,00</strong></td>
              <td><strong>R$ 1.000,00</strong></td>
              <td><strong>R$ 4.700,00</strong></td>
            </tr>
            <tr>
              <th scope="row">Mensalidade no plano mensal</th>
              <td><strong>R$ 157,50</strong></td>
              <td><strong>R$ 1.100,00</strong></td>
              <td><strong>R$ 5.170,00</strong></td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th scope="row">Escolha seu plano</th>
              <td><a href="{{ $page->baseUrl }}contato" class="lc-btn lc-btn--ghost">Assinar Básico</a></td>
              <td><a href="{{ $page->baseUrl }}contato" class="lc-btn">Assinar Pro</a></td>
              <td><a href="{{ $page->baseUrl }}contato" class="lc-btn lc-btn--ghost">Falar sobre Empresas</a></td>
            </tr>
          </tfoot>
        </table>
      </div>

      <p class="nc-pricing__note" data-reveal="up">
        Todos os planos permitem usuários ilimitados. Você gerencia livremente como o armazenamento disponível
        é distribuído e quais limites cada usuário terá. Precisa de uma configuração específica?
        <a href="{{ $page->baseUrl }}contato">Fale com a LibreCode</a>.
      </p>
    </div>
  </section>

  {{-- ==========================  PERGUNTAS FREQUENTES  ========================== --}}
  <section id="nc-faq" class="lc-section lc-section--ink nc-faq">
    <div class="lc-shell">
      <div class="lc-head" data-reveal="up">
        <p class="lc-eyebrow lc-eyebrow--index"><b>05</b> / Perguntas frequentes</p>
        <h2>Antes de levar sua equipe para uma nuvem própria</h2>
      </div>

      <div class="nc-faq__list" data-reveal="stagger">
        <details>
          <summary>O Nextcloud substitui Google Workspace ou Microsoft 365?</summary>
          <p>Ele reúne alternativas para arquivos, calendários, contatos, chamadas e edição colaborativa. A equivalência exata depende das ferramentas e integrações usadas pela sua organização; por isso, começamos pelo diagnóstico.</p>
        </details>
        <details>
          <summary>Existe limite de armazenamento ou de pessoas?</summary>
          <p>O ambiente é dimensionado de acordo com a necessidade da organização. Na proposta, definimos capacidade, número de usuários e recursos para que custos e possibilidades fiquem claros.</p>
        </details>
        <details>
          <summary>Onde os dados ficam hospedados?</summary>
          <p>A LibreCode oferece hospedagem no Brasil. Durante o planejamento, detalhamos a arquitetura, as rotinas de backup e os requisitos de privacidade aplicáveis ao projeto.</p>
        </details>
        <details>
          <summary>Posso usar o domínio da minha organização?</summary>
          <p>Sim. A implantação pode usar um endereço próprio, como <strong>nuvem.suaorganizacao.org.br</strong>, preservando a identidade da organização.</p>
        </details>
        <details>
          <summary>E a conta de e-mail?</summary>
          <p>O Nextcloud não substitui o provedor de e-mail, mas pode reunir contas compatíveis em seu aplicativo de correio. Avaliamos essa integração junto com os demais serviços da organização.</p>
        </details>
        <details>
          <summary>Vocês ajudam a migrar de outra plataforma?</summary>
          <p>Sim. Primeiro analisamos origem, volume e formatos dos dados; depois definimos com a equipe um plano de migração para arquivos, contatos e calendários.</p>
        </details>
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
