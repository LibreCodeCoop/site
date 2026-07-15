---
title: Coopere com a LibreCode — Faça parte da cooperativa
description: Junte-se a uma cooperativa de desenvolvedores de software livre. Sem chefes, com cooperados. Conheça os benefícios, as áreas de atuação e como fazer parte da LibreCode.
---

@extends('_layouts.main')
@section('body')

{{-- ==========================  HERO  ========================== --}}
<section class="lc-pagehero">
    <div class="lc-pagehero__inner">
        <p class="lc-eyebrow lc-hero__eyebrow" data-reveal="up">// carreiras · cooperativismo</p>

        <h1 data-hero-title>
            <span class="lc-line"><span>Faça parte da</span></span>
            <span class="lc-line"><span class="lc-accent">LibreCode</span></span>
        </h1>

        <p class="lc-pagehero__lead" data-reveal="up">
            Somos uma cooperativa de desenvolvedores de software livre em busca de uma forma
            de trabalhar diferente das que já experimentamos no mundo corporativo — sem chefes,
            com cooperados, e com as pessoas no centro das decisões.
        </p>

        <div class="lc-hero__actions" data-reveal="up">
            <a href="#jornada" class="lc-btn">Quero cooperar <span class="lc-btn__arrow">→</span></a>
            <a href="#beneficios" class="lc-btn lc-btn--ghost">Ver benefícios</a>
        </div>

        <p class="lc-pagehero__count" data-reveal="up" aria-hidden="true">
            <span>100%</span> cooperado · <span>0</span> chefes · trabalho remoto
        </p>
    </div>
</section>

{{-- ==========================  VALORES (marquee)  ========================== --}}
<section class="lc-principles" aria-label="Valores da LibreCode">
    <div class="lc-marquee">
        <div class="lc-marquee__track" data-marquee data-speed="60">
            <span>Transparência</span><span>Liberdade</span><span>Gestão democrática</span><span>Comunidade</span><span>Economia solidária</span><span>Copyleft</span><span>Privacidade</span>
            <span>Transparência</span><span>Liberdade</span><span>Gestão democrática</span><span>Comunidade</span><span>Economia solidária</span><span>Copyleft</span><span>Privacidade</span>
        </div>
    </div>
</section>

<main id="main">

    {{-- ==========================  QUEM SOMOS  ========================== --}}
    <section id="about" class="lc-section lc-section--ink">
        <div class="lc-shell">
            <div class="lc-head" data-reveal="up">
                <p class="lc-eyebrow lc-eyebrow--index"><b>01</b> / Quem somos</p>
                <h2>Uma cooperativa de devs, <span class="lc-accent">apaixonados por software livre</span></h2>
                <p>Software livre é o software que concede liberdade ao usuário para executar, acessar e modificar o código-fonte, e redistribuir cópias com ou sem modificações. Essa mesma liberdade guia como nos organizamos.</p>
            </div>

            <figure class="lc-jobs-figure" data-reveal="up">
                <img src="{{ $page->baseUrl }}assets/images/librecode_team.jpeg" alt="Equipe da LibreCode reunida" loading="lazy">
            </figure>

            <div class="lc-why" data-reveal="stagger">
                <article class="lc-why__card">
                    <div class="lc-why__idx">// 01</div>
                    <h3>Cooperativa de TI</h3>
                    <p>Somos profissionais de tecnologia da informação especializados no desenvolvimento e na implantação de soluções em software livre — donos do próprio trabalho e das próprias decisões.</p>
                </article>
                <article class="lc-why__card">
                    <div class="lc-why__idx">// 02</div>
                    <h3>Trabalho com propósito</h3>
                    <p>Aqui ninguém precisa de terno e gravata — só de vontade de cooperar e construir tecnologia com propósito. A liberdade não está só no código, mas também no nosso espírito cooperativo.</p>
                </article>
            </div>
        </div>
    </section>

    {{-- ==========================  BENEFÍCIOS  ========================== --}}
    <section id="beneficios" class="lc-section lc-section--paper">
        <div class="lc-shell">
            <div class="lc-head" data-reveal="up">
                <p class="lc-eyebrow lc-eyebrow--index"><b>02</b> / O que oferecemos</p>
                <h2>Benefícios de quem é <span class="lc-accent">dono</span></h2>
                <p>Ser cooperado é vestir a camisa e ser dono como todos os outros sócios, contribuindo para o crescimento da cooperativa — e compartilhando os resultados desse trabalho.</p>
            </div>

            <div class="lc-perks" data-reveal="stagger">
                <article class="lc-perk">
                    <div class="lc-perk__icon"><i class="lni lni-heart-monitor"></i></div>
                    <h3>Plano de saúde</h3>
                    <p>Cobertura de saúde para você cuidar de quem mais importa: você.</p>
                </article>
                <article class="lc-perk">
                    <div class="lc-perk__icon"><i class="lni lni-shield"></i></div>
                    <h3>Seguro de vida</h3>
                    <p>Proteção e tranquilidade para você e sua família.</p>
                </article>
                <article class="lc-perk">
                    <div class="lc-perk__icon"><i class="lni lni-coin"></i></div>
                    <h3>Divisão de sobras</h3>
                    <p>Participação na divisão das sobras orçamentárias do ano.</p>
                </article>
                <article class="lc-perk">
                    <div class="lc-perk__icon"><i class="lni lni-graduation"></i></div>
                    <h3>Formação continuada</h3>
                    <p>Formações na área do cooperativismo e desenvolvimento profissional.</p>
                </article>
                <article class="lc-perk">
                    <div class="lc-perk__icon"><i class="lni lni-island"></i></div>
                    <h3>Férias remuneradas</h3>
                    <p>Tempo para descansar e voltar com energia renovada.</p>
                </article>
                <article class="lc-perk">
                    <div class="lc-perk__icon"><i class="lni lni-stats-up"></i></div>
                    <h3>Renda variável</h3>
                    <p>Remuneração mensal variável, de acordo com a produção.</p>
                </article>
            </div>

            <div class="lc-jobs-callout" data-reveal="up">
                <i class="lni lni-home" aria-hidden="true"></i>
                <p>Local de trabalho: <code>0.0.0.0</code> ou <code>127.0.0.1</code> — trabalhamos de onde estivermos.</p>
                <a href="{{ $page->baseUrl }}jobs/forma-contratacao" class="lc-jobs-callout__link">Forma de contratação <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>

    {{-- ==========================  ÁREAS DE ATUAÇÃO  ========================== --}}
    <section id="areas" class="lc-section lc-section--ink">
        <div class="lc-shell">
            <div class="lc-head" data-reveal="up">
                <p class="lc-eyebrow lc-eyebrow--index"><b>03</b> / Áreas de atuação</p>
                <h2>Onde você pode <span class="lc-accent">desenvolver seu potencial</span></h2>
                <p>Trabalhamos com soluções livres nas quais você poderá desenvolver o seu potencial como empreendedor. E não se limite ao que temos hoje — venha cooperar conosco.</p>
            </div>

            <div class="lc-tracks" data-reveal="stagger">
                <a class="lc-track" href="{{ $page->baseUrl }}jobs/requisitos-backend">
                    <span class="lc-track__idx">01</span>
                    <h3>Backend</h3>
                    <p>Desenvolvimento para Nextcloud, análise de sistemas e aplicações web — sobretudo em PHP.</p>
                    <div class="lc-track__tags"><span>Linux</span><span>PHP</span><span>Banco de dados</span><span>CI/CD</span></div>
                    <span class="lc-track__cta">Ver requisitos <span aria-hidden="true">→</span></span>
                </a>
                <a class="lc-track" href="{{ $page->baseUrl }}jobs/requisitos-frontend">
                    <span class="lc-track__idx">02</span>
                    <h3>Frontend</h3>
                    <p>Interfaces para Nextcloud e aplicações web diversas, com olhar cuidadoso para UX e UI.</p>
                    <div class="lc-track__tags"><span>JavaScript</span><span>VueJS</span><span>Docker</span><span>UX/UI</span></div>
                    <span class="lc-track__cta">Ver requisitos <span aria-hidden="true">→</span></span>
                </a>
                <a class="lc-track" href="{{ $page->baseUrl }}jobs/requisitos-infraestrutura">
                    <span class="lc-track__idx">03</span>
                    <h3>Infraestrutura</h3>
                    <p>Administração da infra da LibreCode e de clientes, automação de processos e suporte.</p>
                    <div class="lc-track__tags"><span>Sysadmin</span><span>Linux</span><span>Docker</span><span>Automação</span></div>
                    <span class="lc-track__cta">Ver requisitos <span aria-hidden="true">→</span></span>
                </a>
            </div>
        </div>
    </section>

    {{-- ==========================  A JORNADA (processo)  ========================== --}}
    <section id="jornada" class="lc-section lc-section--paper">
        <div class="lc-shell">
            <div class="lc-head" data-reveal="up">
                <p class="lc-eyebrow lc-eyebrow--index"><b>04</b> / Como cooperar</p>
                <h2>A jornada até se <span class="lc-accent">tornar cooperado</span></h2>
                <p>Nosso processo é simples e direto: nada de testes inventados. Queremos conhecer sua forma de pensar e convidar você a contribuir de forma concreta com nossos projetos.</p>
            </div>

            <ol class="lc-journey" data-reveal="stagger">
                <li class="lc-journey__step">
                    <span class="lc-journey__num">1</span>
                    <div class="lc-journey__body">
                        <h3>Conheça o cooperativismo</h3>
                        <p>Explore as leis que regem nosso ramo, nosso estatuto e regimento interno, e faça os cursos de introdução ao cooperativismo.</p>
                        <div class="lc-journey__links">
                            <a href="{{ $page->baseUrl }}jobs/cursos">Cursos</a>
                            <a href="{{ $page->baseUrl }}jobs/materiais-de-apoio">Materiais de apoio</a>
                            <a href="{{ $page->baseUrl }}jobs/videos">Vídeos</a>
                        </div>
                    </div>
                </li>
                <li class="lc-journey__step">
                    <span class="lc-journey__num">2</span>
                    <div class="lc-journey__body">
                        <h3>Alinhe-se à nossa missão</h3>
                        <p>Colaborar para uma economia solidária, democratizando a tecnologia, a segurança e a privacidade de dados com software livre. Se isso ressoa com você, estamos no caminho certo.</p>
                        <div class="lc-journey__links">
                            <a href="{{ $page->baseUrl }}jobs/pre-requisitos">Ver pré-requisitos</a>
                        </div>
                    </div>
                </li>
                <li class="lc-journey__step">
                    <span class="lc-journey__num">3</span>
                    <div class="lc-journey__body">
                        <h3>Contribua de forma concreta</h3>
                        <p>Escolha um exercício prático da sua área de interesse e execute com autonomia. É uma chance de contribuir com um projeto real e deixar sua marca — não apenas um teste.</p>
                        <div class="lc-journey__links">
                            <a href="{{ $page->baseUrl }}jobs/exercicios">Exercícios</a>
                            <a href="{{ $page->baseUrl }}jobs/exercicios/good-first-issue">Good first issues</a>
                        </div>
                    </div>
                </li>
                <li class="lc-journey__step">
                    <span class="lc-journey__num">4</span>
                    <div class="lc-journey__body">
                        <h3>Submeta sua proposta</h3>
                        <p>Deu um oi no nosso grupo, contribuiu e curtiu a experiência? Então envie sua proposta de admissão para seguirmos juntos.</p>
                        <div class="lc-journey__links">
                            <a href="https://t.me/LibreCodeCoop" target="_blank" rel="noopener">Grupo no Telegram</a>
                            <a href="https://ls.librecode.coop/index.php?r=survey/index&sid=154438&lang=pt-BR" target="_blank" rel="noopener">Proposta de admissão</a>
                        </div>
                    </div>
                </li>
                <li class="lc-journey__step">
                    <span class="lc-journey__num">5</span>
                    <div class="lc-journey__body">
                        <h3>Entrevistas &amp; boas-vindas</h3>
                        <p>Conhecemos quem está por trás da contribuição — aspectos técnicos, comportamentais e alinhamento com o cooperativismo. Cooperar é também saber caminhar junto.</p>
                        <div class="lc-journey__links">
                            <a href="{{ $page->baseUrl }}jobs/entrevistas">Sobre as entrevistas</a>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    {{-- ==========================  CTA FINAL  ========================== --}}
    <section id="cooperar" class="lc-cta">
        <div class="lc-cta__inner" data-reveal="up">
            <p class="lc-eyebrow">// vamos juntos</p>
            <h2>Vamos juntos <span class="lc-accent">cooperar!</span></h2>
            <p class="lc-cta__lead">
                Tornar-se sócio é vestir a camisa e ser dono como todos os outros cooperados.
                Se você compartilha desses valores, dê o primeiro passo.
            </p>
            <div class="lc-hero__actions">
                <a href="{{ $page->baseUrl }}jobs/pre-requisitos" class="lc-btn">Começar minha jornada <span class="lc-btn__arrow">→</span></a>
                <a href="https://t.me/LibreCodeCoop" target="_blank" rel="noopener" class="lc-btn lc-btn--ghost">Falar no Telegram</a>
            </div>
        </div>
    </section>

</main>
@endsection
