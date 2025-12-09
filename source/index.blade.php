@extends('_layouts.main')

@section('body')
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
          <p>Todas as nossas soluções podem ser customizadas e adaptadas às necessidades de cada cliente. Confira!</p>
        </header>

        <!-- Gestão e Produtividade -->
        <div class="row mt-4">
          <div class="col-12">
            <h4 class="text-center mb-4">📊 Gestão e Produtividade</h4>
          </div>
        </div>
        <div class="row row-eq-height justify-content-center mb-5">
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp h-100 px-4">
              <img class="rounded mx-auto d-block mt-3" src="{{ $page->baseUrl }}assets/images/nextcloud/logo.png" alt="nextcloud logo" width="120px">
              <h5 class="text-center mt-3">Nextcloud</h5>
              <p class="mb-4">Sua nuvem privada para armazenamento de documentos e colaboração eficiente para equipes de qualquer tamanho.</p>
              <div class="card-body pb-3 mt-auto">
                <a href="{{ $page->baseUrl }}nextcloud" class="btn btn-secondary btn-block">Conheça!</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp h-100 px-4" data-wow-delay="0.1s">
              <div class="d-flex justify-content-center align-items-center" style="height: 120px; margin-top: 12px;">
                <i class="fa fa-clock-o" style="font-size: 80px; color: #50a5f1;"></i>
              </div>
              <h5 class="text-center mt-3">Kimai</h5>
              <p class="mb-4">Controle de horas e gestão de tempo para projetos. Acompanhe o tempo investido em cada atividade e melhore a produtividade.</p>
              <div class="card-body pb-3 mt-auto">
                <a href="https://t.me/LibreCodeCoop" target="_blank" class="btn btn-secondary btn-block">Saiba mais</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp h-100 px-4" data-wow-delay="0.2s">
              <div class="d-flex justify-content-center align-items-center" style="height: 120px; margin-top: 12px;">
                <i class="fa fa-usd" style="font-size: 80px; color: #50a5f1;"></i>
              </div>
              <h5 class="text-center mt-3">Akaunting</h5>
              <p class="mb-4">Software de gestão financeira completo. Controle receitas, despesas, faturamento e tenha visão total das finanças da sua organização.</p>
              <div class="card-body pb-3 mt-auto">
                <a href="https://t.me/LibreCodeCoop" target="_blank" class="btn btn-secondary btn-block">Saiba mais</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Assinaturas e Documentos -->
        <div class="row mt-5">
          <div class="col-12">
            <h4 class="text-center mb-4">📝 Assinaturas e Documentos</h4>
          </div>
        </div>
        <div class="row row-eq-height justify-content-center mb-5">
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp h-100 px-4">
              <img class="rounded mx-auto d-block mt-3" src="{{ $page->baseUrl }}assets/images/logo/libresign.png" alt="libresign logo" width="120px">
              <h5 class="text-center mt-3">LibreSign</h5>
              <p class="mb-4">Plataforma completa para assinatura digital de documentos, com praticidade, segurança e validade jurídica.</p>
              <div class="card-body pb-3 mt-auto">
                <a href="https://libresign.coop/" class="btn btn-secondary btn-block" target="_blank">Conheça!</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Analytics e Dados -->
        <div class="row mt-5">
          <div class="col-12">
            <h4 class="text-center mb-4">📈 Analytics e Dados</h4>
          </div>
        </div>
        <div class="row row-eq-height justify-content-center mb-5">
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp h-100 px-4">
              <img class="rounded mx-auto d-block mt-3" src="{{ $page->baseUrl }}assets/images/solucoes/matomo.png" alt="matomo logo" width="120px">
              <h5 class="text-center mt-3">Matomo</h5>
              <p class="mb-4">Analytics web com total privacidade. Alternativa ética ao Google Analytics, 100% LGPD compliance e dados sob seu controle.</p>
              <div class="card-body pb-3 mt-auto">
                <a href="https://t.me/LibreCodeCoop" target="_blank" class="btn btn-secondary btn-block">Saiba mais</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp h-100 px-4" data-wow-delay="0.1s">
              <div class="d-flex justify-content-center align-items-center" style="height: 120px; margin-top: 12px;">
                <i class="fa fa-bar-chart" style="font-size: 80px; color: #50a5f1;"></i>
              </div>
              <h5 class="text-center mt-3">LimeSurvey</h5>
              <p class="mb-4">Crie pesquisas e formulários profissionais. Colete dados, analise respostas e tome decisões baseadas em informações concretas.</p>
              <div class="card-body pb-3 mt-auto">
                <a href="https://t.me/LibreCodeCoop" target="_blank" class="btn btn-secondary btn-block">Saiba mais</a>
              </div>
            </div>
          </div>
        </div>

        <!-- CRM e Relacionamento -->
        <div class="row mt-5">
          <div class="col-12">
            <h4 class="text-center mb-4">🤝 CRM e Relacionamento</h4>
          </div>
        </div>
        <div class="row row-eq-height justify-content-center mb-5">
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp h-100 px-4">
              <div class="d-flex justify-content-center align-items-center" style="height: 120px; margin-top: 12px;">
                <i class="fa fa-users" style="font-size: 80px; color: #50a5f1;"></i>
              </div>
              <h5 class="text-center mt-3">SuiteCRM</h5>
              <p class="mb-4">Gestão completa de relacionamento com clientes. Organize vendas, marketing e atendimento em uma única plataforma integrada.</p>
              <div class="card-body pb-3 mt-auto">
                <a href="https://t.me/LibreCodeCoop" target="_blank" class="btn btn-secondary btn-block">Saiba mais</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Ferramentas Web -->
        <div class="row mt-5">
          <div class="col-12">
            <h4 class="text-center mb-4">🔗 Ferramentas Web</h4>
          </div>
        </div>
        <div class="row row-eq-height justify-content-center mb-5">
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp h-100 px-4">
              <div class="d-flex justify-content-center align-items-center" style="height: 120px; margin-top: 12px;">
                <i class="fa fa-link" style="font-size: 80px; color: #50a5f1;"></i>
              </div>
              <h5 class="text-center mt-3">Yourls</h5>
              <p class="mb-4">Encurtador de URLs personalizado. Crie links curtos com sua própria marca e tenha controle total sobre estatísticas de acesso.</p>
              <div class="card-body pb-3 mt-auto">
                <a href="https://t.me/LibreCodeCoop" target="_blank" class="btn btn-secondary btn-block">Saiba mais</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Publicação Acadêmica -->
        <div class="row mt-5">
          <div class="col-12">
            <h4 class="text-center mb-4">📚 Publicação Acadêmica</h4>
          </div>
        </div>
        <div class="row row-eq-height justify-content-center mb-5">
          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp h-100 px-4">
              <img class="rounded mx-auto d-block mt-3" src="{{ $page->baseUrl }}assets/images/solucoes/ojs.png" alt="ojs logo" width="120px">
              <h5 class="text-center mt-3">OJS</h5>
              <p class="mb-4">Open Journal Systems - Plataforma completa para publicação de periódicos científicos com fluxo editorial profissional.</p>
              <div class="card-body pb-3 mt-auto">
                <a href="https://t.me/LibreCodeCoop" target="_blank" class="btn btn-secondary btn-block">Saiba mais</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-12 text-center">
            <p class="h5 text-muted">Precisa de uma solução específica ou integração personalizada?</p>
            <a href="#contact" class="btn btn-primary btn-lg mt-3">Entre em contato</a>
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
        <div class="row apoie-wrap clearfix wow fadeInUp justify-content-md-center">
          <div class="col-lg-6 col-md-6 col-xs-6">
            <div class="apoie-logo">
              <i class="fa fa-github fa-5x" aria-hidden="true"></i>
            </div>
            <p class="text-justify p-5">
              O GitHub Sponsors permite à comunidade de desenvolvedores apoiar financeiramente as pessoas e organizações que projetam, criam e mantêm projetos de código aberto do qual dependem, diretamente no GitHub.
            </p>
            <a class="pl-5" href="https://github.com/sponsors/LibreSign" target=“_blank”>
              Ir para Github Sponsor
            </a>
          </div>
        </div>
      </div>
    </section><!-- #intro -->
  </main>

  @include('_partials.contact_form')

@endsection
