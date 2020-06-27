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
          <li><a href="#testimonials">Produtos</a></li>
          <li><a href="#services">Tecnologias</a></li>
          <li><a href="#team">Equipe</a></li>
          </li>
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
          <h2>Soluções personalizadas<br> 
          com <span> tecnologias livres! </span> </h2>
          <br><br>
          <h5>Especialistas em desenvolvimento web, aplicativos e hospdagem.<br>
          Empresa autogerenciada e igualitária.</h5>
          

      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Quem somos?</h3>

          <p>Somos uma cooperativa de trabalho que desenvolve soluções em software livre, formada por profissionais com ampla experiência de mercado e reconhecidos nacionalmente em eventos de software livre.</p>
        </header>

        <div class="row about-container">

          <div class="col-lg-12 content order-lg-1 order-2">

            <div class="icon-box wow fadeInUp">
              <div class="icon">
                <img src="{{ $page->baseUrl }}assets/images/coop.png" class="img-fluid" alt="">
              </div>
              <h4 class="title"><a href="">Por que uma cooperativa?</a></h4>
              <p class="description">Cooperativas são organizações democráticas, cujas decisões são tomadas de forma coletiva e transparente e onde os cooperados contribuem equitativamente com um princípio de intercooperação e trabalho em conjunto que potencializam a qualidade e produtividade e a economia de escala nos serviços.
                <br>
                O movimento cooperativista trabalha para o desenvolvimento sustentável da comunidade na qual está inserido.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon">
                <i>
                  <img src="{{ $page->baseUrl }}assets/images/gnu.png" class="img-fluid" alt="">
                </i>
              </div>
              <h4 class="title"><a href="">Por que software livre (SL)?</a></h4>
              <p class="description">
                Um projeto de licença livre é construído colaborativamente, de modo que está em constante crescimento e sendo constantemente testado e corrigido em suas atualizações.
                Por ser aberto, o código de um SL é 100% auditável, permitindo identificar a existência de qualquer erro ou falha de segurança em seu interior que possa deixar vulnerável os dados trafegados no sistema. 
                Por isso, um SL permite uma política de segurança de dados mais transparente do que um software proprietário.
              </p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- #about -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Soluções</h3>
          <p>Desenvolvemos soluções completas e personalizadas de acordo com as necessidades de cada cliente.</p>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
              <i>
                <ion-icon name="school-outline"></ion-icon>
                <br>
                Educação a distância
              </i>
              <div class="card-body">
                <a href="{{ $page->baseUrl }}ead" class="readmore">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i>
                  <ion-icon name="folder-open-outline"></ion-icon>
                  <br>
                  Gestão de documentos
                </i>
              <div class="card-body">
                <a href="{{ $page->baseUrl }}nextcloud" class="readmore">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i>
                  <ion-icon name="globe-outline"></ion-icon>
                  <br>
                  Web scrapping
                </i>
              <div class="card-body">
                <a href="{{ $page->baseUrl }}webscraping" class="readmore">Saiba mais</a>
              </div>
            </div>
          </div>

        </div>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
              <i>
                <ion-icon name="fitness-outline"></ion-icon>
                <br>
                Telemedicina
              </i>
              <div class="card-body">
                <a href="{{ $page->baseUrl }}telemedicina" class="readmore">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i>
                  <ion-icon name="analytics-outline"></ion-icon>
                  <br>
                  Web Analytics
                </i>
              <div class="card-body">
                <a href="{{ $page->baseUrl }}web-analitics" class="readmore">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i>
                  <ion-icon name="grid-outline"></ion-icon>
                  <br>
                  Aplicativos
                </i>
              <div class="card-body">
                <a href="{{ $page->baseUrl }}aplicativos" class="readmore">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i>
                  <ion-icon name="desktop-outline"></ion-icon>
                  <br>
                  Sites
                </i>
              <div class="card-body">
                <a href="{{ $page->baseUrl }}sites" class="readmore">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i>
                  <ion-icon name="layers-outline"></ion-icon>
                  <br>
                  ERP
                </i>
              <div class="card-body">
                <a href="{{ $page->baseUrl }}erp" class="readmore">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i>
                  <ion-icon name="people-outline"></ion-icon>
                  <br>
                  CRM
                </i>
              <div class="card-body">
                <a href="{{ $page->baseUrl }}crm" class="readmore">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i>
                  <ion-icon name="wallet-outline"></ion-icon>
                  <br>
                  Comércio eletrônico
                </i>
              <div class="card-body">
                <a href="{{ $page->baseUrl }}comercio-eletronico" class="readmore">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i>
                  <ion-icon name="file-tray-full-outline"></ion-icon>
                  <br>
                  Gestão acadêmica
                </i>
              <div class="card-body">
                <a href="{{ $page->baseUrl }}gestao-academica" class="readmore">Saiba mais</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i>
                  <ion-icon name="videocam-outline"></ion-icon>
                  <br>
                  Assembléias on-line
                </i>
              <div class="card-body">
                <a href="{{ $page->baseUrl }}assembleias-online" class="readmore">Saiba mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Produtos</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">

              <div class="testimonial-item">
                <img src="{{ $page->baseUrl }}assets/images/solucoes/nextcloud.png" class="testimonial-img" alt="">
                <div>
                  Nextcloud é um sistema para gerenciamento de arquivos como Dropbox, Office 365 e Google Drive, porém, livre. O sistema possui recursos como calendário compartilhado, contatos, streaming, dentre outros.
                </div>
                <a href="#" class="readmore">Saiba mais</a>
              </div>

              <div class="testimonial-item">
                <img src="{{ $page->baseUrl }}assets/images/solucoes/ojs.png" class="testimonial-img" alt="">
                <div>
                  Open Journal Systems (OJS) é um sistema para gerenciamento e publicação de periódicos acadêmicos. É a solução mais utilizada pelas principais instituições de pesquisa no mundo.
                </div>
                <a href="#" class="readmore">Saiba mais</a>
              </div>

              <div class="testimonial-item">
                <img src="{{ $page->baseUrl }}assets/images/solucoes/moodle.png" class="testimonial-img" alt="">
                <div>
                  O Moodle é um sistema para gestão de aprendizagem.
                  É a ferramenta de educaçao a distância (EAD) mais utilizada pelas instituições de ensino.
                </div>
                <a href="#" class="readmore">Saiba mais</a>
              </div>

              <div class="testimonial-item">
                <img src="{{ $page->baseUrl }}assets/images/solucoes/ieducar.png" class="testimonial-img" alt="">
                <div>
                  É um sistema para gestão acadêmica. O software já utilizado por algumas prefeituras brasileiras, como é o caso de Itajaí (SC), Arapiraca (AL), Porto Velho (RO) e Parauapebas (PA).
                </div>
                <a href="#" class="readmore">Saiba mais</a>
              </div>

              <div class="testimonial-item">
                <img src="{{ $page->baseUrl }}assets/images/solucoes/matomo.png" class="testimonial-img" alt="">
                <div>
                  Matomo é um software de análise estatística da web, fornece relatórios detalhados sobre o acessos a site rastreia visitas on-line a. É uma ótima alternativa ao popularmente conhecido Google Analytics.
                </div>
                <a href="#" class="readmore">Saiba mais</a>
              </div>

              <div class="testimonial-item">
                <img src="{{ $page->baseUrl }}assets/images/solucoes/mautic.png" class="testimonial-img" alt="">
                <div>
                  Mautic é um sistema para nutrição e acompanhamento de leads para organizar as suas campanhas de marketing. O sistema disponibiliza a visualização de visitas, tempo gasto, páginas acessadas e demais informações acessadas pelo Lead.
                </div>
                <a href="#" class="readmore">Saiba mais</a>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Tecnologias</h3>
          <p>Trabalhamos com as tecnologias livres mais utilizadas na web. Dentre elas:</p>
        </header>

        <div class="row">

          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon">
                <img src="{{ $page->baseUrl }}assets/images/linguagens/php.jpeg" alt="" class="php">
              </div>
              <h4 class="title"><a href="https://nextcloud.com/" target=“_blank”>PHP</a></h4>
              <p class="description-php">O PHP é uma linguagem de script open source de uso geral, usada por mais de 70% dos sites da wolrd wide web.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon">
                <img src="{{ $page->baseUrl }}assets/images/linguagens/js.png" alt="" class="js" >
              </div>
              <h4 class="title"><a href="https://pkp.sfu.ca/ojs/" target=“_blank”>JavaScript</a></h4>
              <p class="description-js">JavaScript é uma linguagem de programação que juntamente com HTML e CSS é uma das três principais tecnologias da World Wide Web.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon">
                <img src="{{ $page->baseUrl }}assets/images/linguagens/mariadb.png" alt="" class="mariadb" >
              </div>
              <h4 class="title"><a href="">MariaDB</a></h4>
              <p class="description-mariadb">MariaDB é uma bifurcação do sistema de gerenciamento de banco de dados relacional MySQL, destinada a permanecer software livre e de código aberto.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon">
                <img src="{{ $page->baseUrl }}assets/images/linguagens/postgre.png" alt="" class="postgre" >
              </div>
              <h4 class="title"><a href="">PostgreSQL</a></h4>
              <p class="description-postgre">O PostgreSQL é um poderoso sistema de banco de dados relacional de código aberto, com grande robustez de recursos de desempenho.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Nosso time</h3>
          <p>Com perfis diversificados, nossos profissionais trocam experiências, conhecimentos e informações, e estão em constante contato com o que há de mais recente na tecnologia. <br>
          Conheça nossa diretoria.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="{{ $page->baseUrl }}assets/images/daiane.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Daiane Alves</h4>
                  <span>Founder - CFO</span>
                  <div class="social">
                    <a href="https://twitter.com/daianealvesrj"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.t.me/DaianeAlvesRJ"><i class="fa fa-telegram"></i></a>
                    <a href="https://www.github.com/DaianeAlvesRJ"><i class="fa fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/daianealvesrj/"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="{{ $page->baseUrl }}assets/images/livia.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Livia Gouvea</h4>
                  <span>co-Fouder - CTO</span>
                  <div class="social">
                    <a href="https://twitter.com/_liviacarol_"><i class="fa fa-twitter"></i></a>
                    <a href="https://t.me/liviagouvea"><i class="fa fa-telegram"></i></a>
                    <a href="https://github.com/liviacarolgouvea"><i class="fa fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/livia-gouvea/"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="{{ $page->baseUrl }}assets/images/vitor.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Vitor Mattos</h4>
                  <span>Founder - CEO</span>
                  <div class="social">
                    <a href="https://twitter.com/vitormattosrj"><i class="fa fa-twitter"></i></a>
                    <a href="https://t.me/VitorMattos"><i class="fa fa-telegram"></i></a>
                    <a href="https://github.com/vitormattos"><i class="fa fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/vitormattos/"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="section-bg">

      <div class="container">

        <div class="section-header">
          <h3>Clientes</h3>
          <p>Nos orgulhamos pelos cases de sucesso e por proporcionar excelentes resultados aos nossos parceiros. Confira alguns deles!</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ $page->baseUrl }}assets/images/clients/client-1.png" class="img-fluid" alt="">
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
              <img src="{{ $page->baseUrl }}assets/images/clients/client-7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="{{ $page->baseUrl }}assets/images/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section>

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container-fluid">

        <div class="section-header">
          <h3>Contato</h3>
        </div>

        <div class="row wow fadeInUp">

<!--           <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.325774740481!2d-43.18237418561411!3d-22.90135188501453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f5c1004c58f%3A0x86ffe24e6439a8e1!2sR.%20Miguel%20Couto%2C%20318%20-%20Centro%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2020070-030!5e0!3m2!1spt-BR!2sbr!4v1589311111817!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div> -->

          <div class="col-lg-12">
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>Rua Miguel Couto, 318</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>contato@lt.coop.br</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>+55(21)2042-2073</p>
              </div>
            </div>

            <div class="form">
              <div id="sendmessage">Mensagem foi enviada!</div>
              <div id="errormessage"></div>
              <form action="https://nc.lt.coop.br/apps/forms/api/v1/submission/insert" method="post" role="form" class="contactForm" id="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Seu e-mail" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensagem"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="form-group text-center"><button type="submit" title="Send Message">Enviar mensagem</button></div>
              </form>
              <div class="alert alert-success" role="alert" id="Success" style="display: none;">Dados enviados com sucesso!</div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>
  <script>
  $(document).ready(function() {
    $("#contactForm").submit(function(event){

      $(".alert").hide();

      event.preventDefault(); //prevent default action

      var post_url = $(this).attr("action"); //get form action url

      $.ajax({
        type: "POST",
        url: post_url,
        data: {"formId":6,"answers":{"12":[$('#name').val()],"13":[$('#email').val()],"14":[$('#subject').val()],"15":[$('#message').val()]}},
        dataType: "json", // and this
        success: function (msg) {
          $('#form .form-group').hide()
          $("#Success").show();
        },
        error: function (xhr) {
          console.log(xhr)
          $.each(xhr.responseJSON, function(k, v) {
            var id = v.replace(' ','_')
            $("#"+id).show();
          });
        }
      });
    });
  });
  </script>
@endsection
