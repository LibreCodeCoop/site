@extends('_layouts.master')

@section('body')

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">
      <div class="intro-info">
          <h2>Telemedicina</h2>   
      </div>
    </div>    
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="clearfix">
      <div class="container">

        <div class="row about-container">

          <div class="col-lg-12 content order-lg-1 order-2">

            <div class="icon-box wow fadeInUp">
              <p class="description">
                A telemedicina envolve processos como monitoramento de pacientes, consultas remotas, troca de informações médicas e emissão de laudos podendo ser usada como forma de encurtar distâncias e agilizar o processos. Oferecemos um sistema que pode prover muitas ferramentas para viabilizar a telemedicina. Dentre outros recursos, nossa solução disponibiliza:
              </p>
            </div>              
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <h4 class="title">
                Teleconsulta
              </h4>
              <p class="description">
                A ferramenta de video conferência permite a realização de consultas online com garantia de sigilo e segurança dos dados e vídeo
              </p>
            </div>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <h4 class="title">
                Disponibilização de laudos a pacientes
              </h4>
              <p class="description">
                É possível a criação de áreas autenticadas onde o paciente pode ter acesso aos seus documentos, receitas e laudos de exames.
              </p>
            </div>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <h4 class="title">
                Área de profissionais da saúde
              </h4>
              <p class="description">
                A partir da configuração de perfis e permissões, os profissionais de saúde podem criar áreas de compartilhamento de análises e discussões sobre casos
              </p>
            </div>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <h4 class="title">
                Diponibilidade
              </h4>
              <p class="description">
                O sistema fica diponível 24h por dia, 7 dias por semana
              </p>
            </div>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <h4 class="title">
                Segurança de dados
              </h4>
              <p class="description">
                O sistema garante segurança e sigilo nas consultas por vídeo conferência e emissão de laudos de exames
              </p>
            </div>            
        </div>
      </div>
    </section><!-- #about -->


  </main>
@endsection
