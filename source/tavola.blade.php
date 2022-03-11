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
          <h2>Assembleias on-line</h2>
          <p>Conheça o <b>Távola</b>, um sistema com todo o necessário para a realização de assembléias de forma remota e com validade jurídica.</p>
      </div>
    </div>    
</section>
<main id="main">
  <section id="about">
    <div class="container">
      <div class="row about-container">
        <div class="col-lg-12 content order-lg-1 order-2">
          <div class="icon-box wow fadeInUp">
            <h3>
              Funcionalidades:
            </h3>
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
                  <i class="fa fa-check"></i> Gravação da assembléia
                </h4>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection