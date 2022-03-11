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
          <h2>Gestão de documentos em <span>nuvem exclusiva</span></h2>
          <p>Conheça o <b>Nextcloud</b>, muito mais do que uma nuvem, um hub de aplicações com tudo necessário para gestão.</p>
      </div>
    </div>    
</section>
<main id="main">
  <section id="about">
    <div class="container">
      <div class="row about-container">
        <div class="col-lg-3 icon-box wow fadeInUp" style="text-align: center;">
          <h4>Gestão de arquivos</h4>
          <p>Organize seus arquivos e pastas de forma segura e colaborativa.<p>
        </div>
        <div class="col-lg-9 icon-box wow fadeInUp" data-wow-delay="0.2s" style="text-align: left;">
          <a href="../assets/images/nextcloud/arquivos.png" class="glightbox" >
            <img src="../assets/images/nextcloud/arquivos.png" alt="image" width="400px"/>
          </a>
        </div>
      </div>
      <div class="row about-container">
        <div class="col-lg-9 icon-box wow fadeInUp" data-wow-delay="0.2s" style="text-align: right;">
          <a href="../assets/images/nextcloud/logs.png" class="glightbox" >
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
          <h4>Gestão de usuários</h4>
          <p>Crie grupos com diferentes permissões de acesso e gerencie as permissões de usuários</p>
        </div>
        <div class="col-lg-9 icon-box wow fadeInUp" data-wow-delay="0.2s" style="text-align: left;">
          <a href="../assets/images/nextcloud/usuarios.png" class="glightbox" >
            <img src="../assets/images/nextcloud/usuarios.png" alt="image" width="400px"/>
          </a>
        </div>
      </div>
      <div class="row about-container">
        <div class="col-lg-9 icon-box wow fadeInUp" data-wow-delay="0.2s" style="text-align: right;">
          <a href="../assets/images/nextcloud/agenda.png" class="glightbox" >
            <img src="../assets/images/nextcloud/agenda.png" alt="image" width="400px"/>
          </a>
        </div>
        <div class="col-lg-3 icon-box wow fadeInUp" style="text-align: center;">
          <h4>Agenda</h4>
          <p>Crie agendas para cada necessidade e associe participantes a elas.<p>
        </div>
      </div>
      <div class="row about-container">
        <div class="col-lg-3 icon-box wow fadeInUp" style="text-align: center;">
          <h4>Edição de <br>documentos on-line</h4>
          <p>Edite documentos on-line de forma colaborativa.<p>
        </div>
        <div class="col-lg-9 icon-box wow fadeInUp" data-wow-delay="0.2s" style="text-align: left;">
          <a href="../assets/images/nextcloud/onlyoffice.png" class="glightbox" >
            <img src="../assets/images/nextcloud/onlyoffice.png" alt="image" width="400px"/>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section id="why-us" class="wow fadeIn">
    <div class="container">
      <header class="section-header">
        <h3>E muito mais...</h3>
        <br>
      </header>
      <div class="row row-eq-height justify-content-center">
        <div class="col-lg-3 mb-3">
          <div class="card wow bounceInUp">
            <i>
              <ion-icon name="phone-portrait-outline"></ion-icon>
              <br>
              Aplicativo para celular
              <p>Tenha seus dados na palma de sua mão, a qualquer momento e em qualquer lugar!</p>
            </i>
          </div>
        </div>
        <div class="col-lg-3 mb-3">
          <div class="card wow bounceInUp">
              <i>
                <ion-icon name="chatbubbles"></ion-icon>
                <br>
                Chat
                <p>Realize chat pessoais <br> ou diretamente em documentos.</p>
              </i>
          </div>
        </div>
        <div class="col-lg-3 mb-3">
          <div class="card wow bounceInUp">
              <i>
                <ion-icon name="videocam"></ion-icon>
                <br>
                Chamada de <br> vídeo
                <p>Realize videoconferências <br>com a equipe</P>
              </i>
          </div>
        </div>
        <div class="col-lg-3 mb-3">
          <div class="card wow bounceInUp">
              <i>
                <ion-icon name="key"></ion-icon>
                <br>
                Criptografia
                <p>Dados criptografados e invioláveis</p>
              </i>
          </div>
        </div>
      </div>
      <div class="row row-eq-height justify-content-center">
        <div class="col-lg-3 mb-3">
          <div class="card wow bounceInUp">
            <i>
              <ion-icon name="logo-buffer"></ion-icon>
              <br>
              Gestão de Atividades
              <p>Crie e gerencie quadros de controle de fluxos <br> de produção (Kanban).<p>
            </i>
          </div>
        </div>
        <div class="col-lg-3 mb-3">
          <div class="card wow bounceInUp">
              <i>
                <ion-icon name="list"></ion-icon>
                <br>
                Enquetes
                <p>Crie e compartilhe enquetes <br> para consulta interna <br> ou externa.</p>
              </i>
          </div>
        </div>
        <div class="col-lg-3 mb-3">
          <div class="card wow bounceInUp">
              <i>
                <ion-icon name="clipboard"></ion-icon>
                <br>
                Formulários
                <p>Crie formulários para serem respondidos por sua equipe ou compartilhe com clientes.</p>
              </i>
          </div>
        </div>
        <div class="col-lg-3 mb-3">
          <div class="card wow bounceInUp">
              <i>
                <ion-icon name="finger-print"></ion-icon>
                <br>
                Gestor de senhas
                <p>Guarde e gerencie suas senhas de forma organizada e segura.</p>
              </i>
          </div>
        </div>
      </div>
    </div>
    <header class="section-header">
      <br><br>
      <h3>Gostou? Agende uma demonstração conosco!</h3>
    </header>
  </section>
</main>
@endsection