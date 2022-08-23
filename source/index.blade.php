@extends('_layouts.master')

@section('body')

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">
      <div class="logo float-left">
        <a href="#intro" class="scrollto"><img src="{{ $page->baseUrl }}assets/images/logo.png" alt="" class="img-fluid"></a>
      </div>
      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="#about">Quem somos</a></li>
          <li><a href="#why-us">Soluções</a></li>
          <li><a href="#clients">Clientes</a></li>
          <li><a href="#apoie">Apoie</a></li>
          <li><a href="#contact">Contato</a></li>
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">
        <div class="intro-info">
          <h2>Tecnologia com <br> <span>transparência</span> e <span>liberdade</span></h2>
          <p>Somos uma cooperativa digital de especialistas em desenvolvimento de software livre</p>
      </div>
  </div>
</section>

  <main id="main">
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">
            <div class="col-lg-6 icon-box wow fadeInUp">
              <div class="icon">
                <img src="{{ $page->baseUrl }}assets/images/coop.png" class="img-fluid" alt="">
              </div>
              <h4 class="title"><a href="">Por que uma cooperativa?</a></h4>
              <p class="description">Cooperativas são organizações democráticas, cujas decisões são tomadas de forma coletiva e transparente e onde os cooperados contribuem equitativamente dentro de um princípio de intercooperação e trabalho em conjunto que potencializam a qualidade, produtividade e a economia de escala nos serviços.
                <br>
                O movimento cooperativista trabalha para o desenvolvimento sustentável da comunidade na qual está inserido.</p>
            </div>
            <div class="col-lg-6 icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon">
                <i>
                  <img src="{{ $page->baseUrl }}assets/images/gnu.png" class="img-fluid" alt="">
                </i>
              </div>
              <h4 class="title"><a href="">Por que software livre (SL)?</a></h4>
              <p class="description">
                Um projeto de licença livre é construído colaborativamente, de modo que está em constante crescimento e sendo constantemente testado e corrigido em suas atualizações.
                Por ser aberto, o código de um SL é 100% auditável, permitindo identificar a existência de qualquer erro ou falha de segurança em seu interior que possa deixar vulnerável os dados trafegados no sistema. 
                Por isso, um SL permite uma política de segurança de dados muito mais transparente do que um software proprietário.
              </p>
            </div>
        </div>
      </div>
    </section>
    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Soluções</h3>
          <p>Todas as nossas soluções podem ser customizadas e adaptadas às necessidades de cada cliente.Confira!</p>
        </header>
        <div class="row row-eq-height justify-content-center">
          <div class="col-lg-6 mb-6">
            <div class="card wow bounceInUp">
              <i>
                <ion-icon name="cloud-outline"></ion-icon>
                <br>
                Gestão de documentos em nuvem <br> exclusiva
              </i>
              <div class="card-body">
                <a href="{{ $page->baseUrl }}nextcloud" class="readmore">Conheça!</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-6">
            <div class="card wow bounceInUp">
                <i>
                  <ion-icon name="checkmark-circle-outline"></ion-icon>
                  <br>
                  Assinatura eletrônica de documentos ilimitada
                </i>
              <div class="card-body">
                <a href="https://libresign.coop/" class="readmore" target=“_blank”>Conheça!</a>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row row-eq-height justify-content-center">
          <div class="col-lg-6 mb-6">
            <div class="card wow bounceInUp">
                <i>
                  <ion-icon name="videocam"></ion-icon>
                  <br>
                  Assembleias on-line
                </i>
              <div class="card-body">
                <a href="{{ $page->baseUrl }}tavola" class="readmore">Conheça!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--==========================
      Clients Section
    ============================-->
    <section id="clients">
      <div class="container">
        <div class="section-header">
          <h3>Clientes</h3>
          <p>Nossa reconhecida expertise e a singularidade de nosso modelo de negócio é creditada por diversos atores dos setores público, privado e do terceiro setor.</p>
        </div>
        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ $page->baseUrl }}assets/images/clients/prefeitura-nikiti.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ $page->baseUrl }}assets/images/clients/client-2.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ $page->baseUrl }}assets/images/clients/client-3.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ $page->baseUrl }}assets/images/clients/client-4.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ $page->baseUrl }}assets/images/clients/client-5.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ $page->baseUrl }}assets/images/clients/client-6.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ $page->baseUrl }}assets/images/clients/nicbr.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ $page->baseUrl }}assets/images/clients/amperj.jpg" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </div>
    </section> 
    <!--==========================
      Apoie Section
    ============================-->
    <section id="apoie" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3>Apoie</h3>
          <p>Se você utiliza ou deseja utilizar nossos produtos e gostaria de contribuir com o desenvolvimento deles.
            Existem diversas formas de você nos apoiar:</p>
        </div>
        <div class="row apoie-wrap clearfix wow fadeInUp">
          <div class="col-lg-6 col-md-6 col-xs-6">
            <div class="apoie-logo">
              <img src="{{ $page->baseUrl }}assets/images/apoie/patreon.png" class="img-fluid apoie" alt="">
            </div>
            <p>
              Patreon é um portal de financiamento coletivo de projetos independentes. <br>
              Lá você poderá escolher nos apoiar com um valor mensal em troca de algumas recompensas no uso de nossos produtos.
            </p>
            <a href="https://www.patreon.com/librecode" target=“_blank”>
              Ir para Patreon
            </a>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-6">
            <div class="apoie-logo">
              <img src="{{ $page->baseUrl }}assets/images/apoie/bountysource.svg" class="img-fluid apoie" alt="">
            </div>
            <p>
              Bountysource é um site de financimanto de projetos de código aberto.
              Lá você pode financiar a solução de alguma melhoria, correção ou desenvolvimento de nova funcionalidade em nossos produtos, 
              ou desenvolver a solução para as tarefas pendentes.
            </p>
            <a href="https://www.bountysource.com/teams/libresign/issues" target=“_blank”>
              Ir para Bountysource
            </a>
          </div>
        </div>
      </div>
    </section><!-- #intro -->
  </main>
@endsection
@section('footer_scripts')
@endsection
