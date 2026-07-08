---
title: Távola | LibreCode
description: Assembleias online com organização, votação, registro e validade jurídica para cooperativas e organizações que precisam decidir com segurança.
---

@extends('_layouts.main')

@section('body')
<header id="header" class="fixed-top">
    <div class="container">
  <div class="logo float-left">
      <a href="{{ $page->baseUrl }}" class="scrollto"><img src="{{ $page->baseUrl }}assets/images/logo/librecode.png" alt="Logo da LibreCode" class="img-fluid"></a>
    </div>
    <nav class="main-nav float-right d-none d-lg-block">
      <ul>
        <li><a href="{{ $page->baseUrl }}">Voltar</a></li>
      </ul>
    </nav><!-- .main-nav -->
  </div>
</header><!-- #header -->

<section id="intro" class="clearfix">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <div class="intro-info">
              <div class="intro-badge mb-3">
                <i class="fa fa-users"></i> Assembleias online
              </div>
              <h2>Realize assembleias remotas com organização, registro e validade jurídica.</h2>
              <p>O Távola reúne convocação, participação, votação e registro em um fluxo único para cooperativas e organizações que precisam conduzir decisões de forma segura.</p>
              <div class="intro-cta">
                <a class="btn btn-primary btn-lg mr-2 mb-2" href="#about">
                  Ver funcionalidades <i class="fa fa-arrow-right ml-2"></i>
                </a>
              </div>
          </div>
        </div>
      </div>
    </div>
</section>
<main id="main">
  <section id="about">
    <div class="container">
      <div class="row about-container">
        <div class="col-lg-12 content order-lg-1 order-2">
          <div class="icon-box wow fadeInUp">
            <h3>Funcionalidades</h3>
          </div>
          <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <h4 class="title">
                <i class="fa fa-check"></i> Criação e edição colaborativa de editais de convocação
              </h4>
            </div>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <h4 class="title">
                <i class="fa fa-check"></i> Sala de videoconferência para realização da assembleia
              </h4>
            </div>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <h4 class="title">
                <i class="fa fa-check"></i> Chat para comunicação durante a assembleia
              </h4>
            </div>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <h4 class="title">
                <i class="fa fa-check"></i> Criação de votações com possibilidade de voto secreto ou nominal
              </h4>
            </div>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <h4 class="title">
                <i class="fa fa-check"></i> Geração de boletim dos votos
              </h4>
            </div>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <h4 class="title">
                <i class="fa fa-check"></i> Geração de relatório de presença e de votação
              </h4>
            </div>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <h4 class="title">
                <i class="fa fa-check"></i> Gravação da assembleia
              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
