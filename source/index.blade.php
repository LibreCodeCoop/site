---
title: LibreCode - Cooperativa de Software Livre
description: Cooperativa de tecnologia especializada em soluções corporativas com software livre. Nuvem privada, gestão, CRM, atendimento e automação com hospedagem no Brasil.
---

@extends('_layouts.main')

@section('body')
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="intro-info">
            <div class="intro-badge mb-3">
              <i class="fa fa-shield"></i> Cooperativa de software livre
            </div>
            <h2>O controle total dos seus sistemas e dados. Sem taxas abusivas, sem termos que prendem sua empresa.</h2>
            <p>Implementamos e hospedamos soluções customizadas que garantem autonomia jurídica e operacional para sua organização. Conecte sua equipe em um ambiente seguro, auditável e livre de licenças proprietárias por usuário.</p>
            <div class="intro-cta">
              <a class="btn btn-primary btn-lg mr-2 mb-2" href="#contact">
                Solicitar diagnóstico de infraestrutura <i class="fa fa-arrow-right ml-2"></i>
              </a>
            </div>
            <p class="intro-support">Fale com um especialista e receba uma proposta sob medida para sua operação.</p>
            <ul class="intro-features mt-4">
              <li><i class="fa fa-check-circle"></i> Você é dono do código, dos dados e da infraestrutura</li>
              <li><i class="fa fa-check-circle"></i> Sem limites de licença ou renovações abusivas</li>
              <li><i class="fa fa-check-circle"></i> Suporte humano especializado e liberdade para migrar quando quiser</li>
              <li><i class="fa fa-check-circle"></i> Hospedagem no Brasil com foco em LGPD e soberania digital</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-5 mt-5 mt-lg-0">
          <div class="visual-card">
            <div class="float-card float-top-left" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              <div>
                <div class="float-card-texto">Diagnóstico consultivo</div>
                <div class="float-card-sub">Entenda o cenário antes de contratar</div>
              </div>
            </div>

            <div class="cert-card">
              <div class="cert-inner">
                <div class="cert-header">
                  <span class="cert-logo">LIBRE<span>CODE</span></span>
                  <span class="cert-tag">3 pilares corporativos</span>
                </div>

                <div class="cert-titulo-bloco">Portfólio organizado por valor de negócio</div>
                <div class="cert-empresa">Soluções sob medida</div>
                <div class="cert-sub">Menos catálogo, mais clareza para decisão em ambientes públicos e corporativos</div>

                <div class="cert-divisor"></div>

                <div class="cert-items">
                  <div class="cert-item">
                    <div class="cert-item-check">
                      <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <div class="cert-item-texto"><strong>Produtividade e nuvem</strong> — e-mail, arquivos, agenda e videoconferência</div>
                  </div>
                  <div class="cert-item">
                    <div class="cert-item-check">
                      <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <div class="cert-item-texto"><strong>Gestão e comercial</strong> — financeiro, ERP e relacionamento com o cliente</div>
                  </div>
                  <div class="cert-item">
                    <div class="cert-item-check">
                      <svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <div class="cert-item-texto"><strong>Comunicação e marketing</strong> — atendimento, automação e relacionamento</div>
                  </div>
                </div>

                <div class="cert-rodape">
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    <polyline points="9 12 11 14 15 10"/>
                  </svg>
                  <div>
                    <div class="cert-rodape-titulo">Validação técnica com foco em negócio</div>
                    <div class="cert-rodape-desc">Nextcloud, Jitsi, Odoo, SuiteCRM, Akaunting, Chatwoot e Mautic</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="float-card float-bottom-right" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/>
              </svg>
              <div>
                <div class="float-card-texto">Sem catálogo disperso</div>
                <div class="float-card-sub">A solução certa aparece primeiro</div>
              </div>
            </div>
          </div>
        </div>
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
                <img loading="lazy" src="{{ $page->baseUrl }}assets/images/coop.png" class="img-fluid" alt="Ícone representando cooperativismo e trabalho em equipe">
              </div>
              <h2 class="title"><a href="">Por que uma cooperativa?</a></h2>
              <p class="description">Cooperativas são organizações democráticas, cujas decisões são tomadas de forma coletiva e transparente. Os cooperados contribuem de forma equitativa, com base na intercooperação e no trabalho em conjunto, o que potencializa a qualidade, a produtividade e a economia de escala nos serviços.
                <br>
                O movimento cooperativista trabalha para o desenvolvimento sustentável da comunidade na qual está inserido.</p>
            </div>
            <div class="col-lg-6 icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon">
                <i>
                  <img loading="lazy" src="{{ $page->baseUrl }}assets/images/gnu.png" class="img-fluid" alt="Logo do projeto GNU representando software livre">
                </i>
              </div>
              <h2 class="title"><a href="">Por que software livre?</a></h2>
              <p class="description">
                Um projeto de licença livre é construído colaborativamente, cresce de forma contínua e passa por testes e correções ao longo de suas atualizações.
                Por ser aberto, o código de um software livre é totalmente auditável, permitindo identificar erros ou falhas de segurança que possam expor os dados trafegados no sistema.
                Por isso, um software livre permite uma política de segurança de dados mais transparente do que um software proprietário.
              </p>
            </div>
        </div>
      </div>
    </section>
    <!--==========================
      Why Choose LibreCode Section
    ============================-->
    <section id="diferenciais" class="section-bg">
      <div class="container">
        <header class="section-header">
          <h2>Por que escolher a LibreCode?</h2>
          <p>Combinamos expertise técnica com valores cooperativistas para entregar soluções que fazem a diferença</p>
        </header>
        <div class="row mt-4">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="diferencial-box wow fadeInUp">
              <div class="diferencial-icon">
                <i class="fa fa-server diferencial-icon-dark"></i>
              </div>
              <h4>Hospedagem em Servidores Próprios</h4>
              <p>Infraestrutura brasileira com total controle e privacidade. Seus dados permanecem no Brasil, garantindo soberania digital e conformidade legal.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="diferencial-box wow fadeInUp" data-wow-delay="0.1s">
              <div class="diferencial-icon">
                <i class="fa fa-users diferencial-icon-dark"></i>
              </div>
              <h4>Suporte Técnico Especializado</h4>
              <p>Time de especialistas que fala sua língua e entende suas necessidades. Atendimento personalizado, ágil e focado em resultados.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="diferencial-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="diferencial-icon">
                <i class="fa fa-cogs diferencial-icon-dark"></i>
              </div>
              <h4>Customização Sob Demanda</h4>
              <p>Adaptamos cada solução às suas necessidades específicas. Desenvolvimento personalizado para atender exatamente o que seu negócio precisa.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="diferencial-box wow fadeInUp" data-wow-delay="0.3s">
              <div class="diferencial-icon">
                <i class="fa fa-lock diferencial-icon-dark"></i>
              </div>
              <h4>Dados Sob Seu Controle</h4>
              <p>Você é o proprietário dos seus dados. Sem dependência de fornecedor único, com liberdade para migrar quando quiser e transparência total sobre onde seus dados estão.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="diferencial-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="diferencial-icon">
                <i class="fa fa-shield diferencial-icon-dark"></i>
              </div>
              <h4>Conformidade com a LGPD</h4>
              <p>Soluções desenvolvidas com privacidade desde o design e alinhadas à Lei Geral de Proteção de Dados e a outras exigências regulatórias.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="diferencial-box wow fadeInUp" data-wow-delay="0.5s">
              <div class="diferencial-icon">
                <i class="fa fa-unlock-alt diferencial-icon-dark"></i>
              </div>
              <h4>Sem Dependência de Big Techs</h4>
              <p>Independência tecnológica com software livre. Sem taxas abusivas, sem bloqueios arbitrários, sem surpresas no contrato.</p>
            </div>
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
          <h2>3 pilares corporativos</h2>
          <p>Em vez de listar ferramentas soltas, organizamos o portfólio em pilares que ajudam gestores, cooperativas e equipes jurídicas a decidir com mais clareza.</p>
        </header>

        <div class="row mt-4">
          <div class="col-lg-4 mb-4">
            <div class="pillar-card wow bounceInUp h-100">
              <div class="pillar-icon">
                <i class="fa fa-cloud"></i>
              </div>
              <h4>Produtividade e Nuvem Corporativa</h4>
              <p>Substitua Google Workspace e Microsoft 365 com e-mail, videoconferência, arquivos e agendas em um ambiente único e privado.</p>
              <div class="pillar-validation">
                <span>Validação técnica</span>
                <p>Nextcloud e Jitsi.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="pillar-card wow bounceInUp h-100" data-wow-delay="0.1s">
              <div class="pillar-icon">
                <i class="fa fa-sitemap"></i>
              </div>
              <h4>Gestão, ERP e Comercial</h4>
              <p>Centralize faturamento, controle financeiro e relacionamento com o cliente sem pagar licenças abusivas por usuário.</p>
              <div class="pillar-validation">
                <span>Validação técnica</span>
                <p>Odoo, SuiteCRM e Akaunting.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="pillar-card wow bounceInUp h-100" data-wow-delay="0.2s">
              <div class="pillar-icon">
                <i class="fa fa-comments"></i>
              </div>
              <h4>Comunicação, Marketing e Atendimento</h4>
              <p>Centralize o atendimento dos seus canais de comunicação e automatize suas réguas de marketing sem depender de plataformas proprietárias caras.</p>
              <div class="pillar-validation">
                <span>Validação técnica</span>
                <p>Chatwoot e Mautic.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-12 text-center">
            <p class="h5 text-muted">Precisa de uma solução específica ou integração personalizada?</p>
            <a href="#contact" class="btn btn-primary btn-lg mt-3">Quero uma solução sob medida</a>
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
              <img loading="lazy" src="{{ $page->baseUrl }}assets/images/clients/prefeitura-nikiti.png" class="img-fluid" alt="Logo da Prefeitura de Nikiti">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img loading="lazy" src="{{ $page->baseUrl }}assets/images/clients/client-2.png" class="img-fluid" alt="Logo de cliente parceiro da LibreCode">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img loading="lazy" src="{{ $page->baseUrl }}assets/images/clients/client-3.png" class="img-fluid" alt="Logo de cliente parceiro da LibreCode">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img loading="lazy" src="{{ $page->baseUrl }}assets/images/clients/client-4.jpg" class="img-fluid" alt="Logo de cliente parceiro da LibreCode">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img loading="lazy" src="{{ $page->baseUrl }}assets/images/clients/client-5.png" class="img-fluid" alt="Logo de cliente parceiro da LibreCode">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img loading="lazy" src="{{ $page->baseUrl }}assets/images/clients/client-6.png" class="img-fluid" alt="Logo de cliente parceiro da LibreCode">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img loading="lazy" src="{{ $page->baseUrl }}assets/images/clients/nicbr.png" class="img-fluid" alt="Logo do NIC.br - Núcleo de Informação e Coordenação">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img loading="lazy" src="{{ $page->baseUrl }}assets/images/clients/amperj.jpg" class="img-fluid" alt="Logo da AMPERJ - Associação do Ministério Público do Estado do Rio de Janeiro">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  @include('_partials.contact_form')

@endsection
