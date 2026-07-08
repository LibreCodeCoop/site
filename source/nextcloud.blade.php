---
title: Nextcloud | LibreCode
description: Produtividade privada com Nextcloud. Centralize arquivos, agendas, tarefas e colaboração em uma nuvem controlada pela sua organização.
---

@extends('_layouts.main')

@section('body')
  <section id="intro" class="clearfix">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="intro-info">
            <div class="intro-badge mb-3">
              <i class="fa fa-cloud"></i> Nuvem privada para sua organização
            </div>
            <h2>Gestão de arquivos, agendas e colaboração em um ambiente único e controlado.</h2>
            <p>O Nextcloud centraliza documentos, calendário, tarefas e edição colaborativa sem depender de plataformas proprietárias. É uma base sólida para produtividade com soberania digital.</p>
            <div class="intro-cta">
              <a class="btn btn-primary btn-lg mr-2 mb-2" href="#about">
                Ver recursos principais <i class="fa fa-arrow-right ml-2"></i>
              </a>
            </div>
            <p class="intro-support">Ideal para equipes que precisam de privacidade, organização e acesso remoto com controle real sobre os dados.</p>
          </div>
        </div>
        <div class="col-lg-5 mt-5 mt-lg-0">
          <div class="visual-card">
            <div class="cert-card">
              <div class="cert-inner">
                <div class="cert-header">
                  <span class="cert-logo">NEXT<span>CLOUD</span></span>
                  <span class="cert-tag">Produtividade privada</span>
                </div>
                <div class="cert-titulo-bloco">O que você ganha com a solução</div>
                <div class="cert-empresa">Colaboração sem ruído</div>
                <div class="cert-sub">Arquivos, comunicação e agenda em uma mesma base, com governança e auditoria.</div>
                <div class="cert-divisor"></div>
                <div class="cert-items">
                  <div class="cert-item">
                    <div class="cert-item-check">
                      <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <div class="cert-item-texto"><strong>Arquivos</strong> organizados e compartilhados com permissões granulares</div>
                  </div>
                  <div class="cert-item">
                    <div class="cert-item-check">
                      <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <div class="cert-item-texto"><strong>Agenda e tarefas</strong> para coordenação de equipe e projetos</div>
                  </div>
                  <div class="cert-item">
                    <div class="cert-item-check">
                      <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <div class="cert-item-texto"><strong>Edição online</strong> com colaboração em tempo real</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <main id="main">
    <section id="about" class="products">
      <div class="container">
        <div class="row about-container">
          <div class="col-lg-3 icon-box wow fadeInUp" style="text-align: center;">
            <h4>Gestão de arquivos</h4>
            <p>Organize arquivos e pastas de forma segura e colaborativa.</p>
          </div>
          <div class="col-lg-9 icon-box wow fadeInUp" data-wow-delay="0.2s" style="text-align: left;">
            <a href="{{ $page->baseUrl }}assets/images/nextcloud/arquivos.png" class="glightbox">
              <img src="{{ $page->baseUrl }}assets/images/nextcloud/arquivos.png" alt="Gestão de arquivos no Nextcloud" />
            </a>
          </div>
        </div>
        <div class="row about-container">
          <div class="col-lg-9 icon-box wow fadeInUp" data-wow-delay="0.2s" style="text-align: right;">
            <a href="{{ $page->baseUrl }}assets/images/nextcloud/logs.png" class="glightbox">
              <img src="{{ $page->baseUrl }}assets/images/nextcloud/logs.png" alt="Log de alterações no Nextcloud" />
            </a>
          </div>
          <div class="col-lg-3 icon-box wow fadeInUp" style="text-align: center;">
            <h4>Log de alterações</h4>
            <p>Acompanhe o histórico de alterações dos arquivos e seus responsáveis.</p>
          </div>
        </div>
        <div class="row about-container">
          <div class="col-lg-3 icon-box wow fadeInUp" style="text-align: center;">
            <h4>Gestão de usuários</h4>
            <p>Crie grupos com diferentes permissões de acesso e gerencie permissões por perfil.</p>
          </div>
          <div class="col-lg-9 icon-box wow fadeInUp" data-wow-delay="0.2s" style="text-align: left;">
            <a href="{{ $page->baseUrl }}assets/images/nextcloud/usuarios.png" class="glightbox">
              <img src="{{ $page->baseUrl }}assets/images/nextcloud/usuarios.png" alt="Gestão de usuários no Nextcloud" />
            </a>
          </div>
        </div>
        <div class="row about-container">
          <div class="col-lg-9 icon-box wow fadeInUp" data-wow-delay="0.2s" style="text-align: right;">
            <a href="{{ $page->baseUrl }}assets/images/nextcloud/agenda.png" class="glightbox">
              <img src="{{ $page->baseUrl }}assets/images/nextcloud/agenda.png" alt="Agenda no Nextcloud" />
            </a>
          </div>
          <div class="col-lg-3 icon-box wow fadeInUp" style="text-align: center;">
            <h4>Agenda</h4>
            <p>Crie agendas para cada necessidade e associe participantes.</p>
          </div>
        </div>
        <div class="row about-container">
          <div class="col-lg-3 icon-box wow fadeInUp" style="text-align: center;">
            <h4>Edição de documentos online</h4>
            <p>Edite documentos online de forma colaborativa.</p>
          </div>
          <div class="col-lg-9 icon-box wow fadeInUp" data-wow-delay="0.2s" style="text-align: left;">
            <a href="{{ $page->baseUrl }}assets/images/nextcloud/onlyoffice.png" class="glightbox">
              <img src="{{ $page->baseUrl }}assets/images/nextcloud/onlyoffice.png" alt="Edição de documentos online no Nextcloud" />
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Mais recursos, quando fizer sentido para a operação</h3>
        </header>
        <div class="row row-eq-height justify-content-center">
          <div class="col-lg-3 mb-3">
            <div class="card wow bounceInUp">
              <i><ion-icon name="phone-portrait-outline"></ion-icon><br>Aplicativo para celular<p>Leve seus dados para qualquer lugar.</p></i>
            </div>
          </div>
          <div class="col-lg-3 mb-3">
            <div class="card wow bounceInUp">
              <i><ion-icon name="chatbubbles"></ion-icon><br>Chat<p>Converse diretamente em contextos de trabalho.</p></i>
            </div>
          </div>
          <div class="col-lg-3 mb-3">
            <div class="card wow bounceInUp">
              <i><ion-icon name="videocam"></ion-icon><br>Videochamada<p>Realize videoconferências com a equipe.</p></i>
            </div>
          </div>
          <div class="col-lg-3 mb-3">
            <div class="card wow bounceInUp">
              <i><ion-icon name="key"></ion-icon><br>Criptografia<p>Dados protegidos com governança e controle.</p></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="products">
      <div class="container">
        <div class="row about-container">
          <div class="col-lg-12 icon-box wow fadeInUp" style="text-align: center;">
            <p class="h2 mb-5 text-dark">Gostou? Agende uma demonstração conosco.</p>
            <a href="#contact" class="btn btn-primary btn-lg mt-2">Solicitar diagnóstico</a>
          </div>
          <div class="col-lg-12 icon-box wow fadeInUp" style="text-align: center;">
            <p class="texto-nextcloud text-center text-dark">Nextcloud é uma marca registrada de Nextcloud GmbH.</p>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
