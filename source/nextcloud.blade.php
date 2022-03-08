@extends('_layouts.master')

@section('body')
<header id="header" class="fixed-top">
  <div class="container">
    <div class="logo float-left">
      <a href="/" class="scrollto"><img src="../assets/images/logo.png" alt="" class="img-fluid"></a>
    </div>
    <nav class="main-nav float-right d-none d-lg-block">
      <ul>
        <li><a href="/">Voltar</a></li>
      </ul>
    </nav><!-- .main-nav -->
  </div>
</header><!-- #header -->

<section id="intro" class="clearfix">
    <div class="container">
      <div class="intro-info">
          <h3>Gestão de documentos em <span>nuvem exclusiva</span></h3>
          <p>Muito mais do que uma nuvem, um hub de aplicações com tudo necessário para a gestão</p>
      </div>
    </div>    
</section>

<main id="main">
  <section id="about">
    <div class="container">
      <div class="row about-container">
        <div class="col-lg-3 icon-box wow fadeInUp" style="text-align: center;">
          <h4>Gestão de arquivos</h4>
          <p>Crie, e modifique arquivos de forma segura e colaborativamente<p>
        </div>
        <div class="col-lg-9 icon-box wow fadeInUp" data-wow-delay="0.2s" style="text-align: left;">
          <a href="../assets/images/nextcloud/arquivos.png" class="glightbox3" data-gallery="gallery1">
            <img src="../assets/images/nextcloud/arquivos.png" alt="image" width="400px"/>
          </a>
        </div>
      </div>
      <div class="row about-container">
        <div class="col-lg-9 icon-box wow fadeInUp" data-wow-delay="0.2s" style="text-align: right;">
          <a href="../assets/images/nextcloud/logs.png" class="glightbox3" data-gallery="gallery1">
            <img src="../assets/images/nextcloud/logs.png" alt="image" width="400px"/>
          </a>
        </div>
        <div class="col-lg-3 icon-box wow fadeInUp" style="text-align: center;">
          <h4>Log de alterações</h4>
          <p>Acompanhe o histórico de alterações dos arquivos e seus responsáveis</p>
        </div>
      </div>
      <div class="row about-container">
        <div class="col-lg-3 icon-box wow fadeInUp" style="text-align: center;">
          <h4>Gestão de usários</h4>
          <p>Crie grupos com diferentes permissões de acesso e gerencie as permissões de usuários</p>
        </div>
        <div class="col-lg-9 icon-box wow fadeInUp" data-wow-delay="0.2s" style="text-align: left;">
          <a href="../assets/images/nextcloud/usuarios.png" class="glightbox3" data-gallery="gallery1">
            <img src="../assets/images/nextcloud/usuarios.png" alt="image" width="400px"/>
          </a>
        </div>
      </div>
      <div class="row about-container">
        <div class="col-lg-9 icon-box wow fadeInUp" data-wow-delay="0.2s" style="text-align: right;">
          <a href="../assets/images/nextcloud/agenda.png" class="glightbox3" data-gallery="gallery1">
            <img src="../assets/images/nextcloud/agenda.png" alt="image" width="400px"/>
          </a>
        </div>
        <div class="col-lg-3 icon-box wow fadeInUp" style="text-align: center;">
          <h4>Agenda</h4>
          <p>Agendas para cada necessidade e associe participantes a elas.<p>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
