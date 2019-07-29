<?php
$page->transparent = true;
?>
@extends('_layouts.master')

@section('body')
 <!-- slider -->
<div class="slider">
  
  <!-- carousel__element owl-carousel -->
  <div class="carousel__element owl-carousel" data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":0, "autoplay": true, "autoplayTimeout": 10000}'>
    <div class="slider__item" style="background-color: #004767;">
      <div class="md-tb">
        <div class="md-tb__cell">
          <div class="slider__content">
            <div class="container">
            <section class="cd-intro">
              <h2 class="cd-headline rotate-1">
                  <span>Soluções em</span>
                  <span class="cd-words-wrapper">
                    <b class="is-visible">tecnologia</b>
                    <b>inovação</b>
                    <b>agilidade</b>
                  </span>
              </h2>
            </section>
             <!-- <h2>SOLUÇÕES EM TECNOLOGIA</h2> -->
              <p>Desenvolvemos produtos digitais com agilidade, inovação e qualidade técnica, para que o mercado brasileiro acompanhe a velocidade do crescimento tecnológico mundial.
              Em nosso time temos profissionais altamente qualificados e especialistas reconhecidos nacionalmente para realizarem seus sonhos por meio da tecnologia.
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End / carousel__element owl-carousel -->
  
</div><!-- End / slider -->

<!-- Section -->
<section class="md-section" style="background-color:#f7f7f7;padding-top:0;">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 offset-0 offset-sm-0 offset-md-1 offset-lg-2 ">
        
        <!-- iconbox -->
        <div class="iconbox">
          <div>
            <h2 class="iconbox__title">Conheça nossas soluções</h2>
          </div>
        </div><!-- End / iconbox -->
        
      </div>
    </div>
    <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-3 ">
      <!-- iconbox -->
      <div class="iconbox iconbox__style-02">
        <div class="iconbox__icon"><i class="ti-desktop"></i></div>
        <div>
          <h2 class="iconbox__title"><a href="/contato">Desenvolvimento Aplicativos e Sistemas</a></h2>
          <div class="iconbox__description">Transforme seu negócio com soluções sob medida. Garanta mais inovação e agilidade no seu dia a dia. Nosso time está preparado para atender as demandas específicas com o melhor custo benefício para que sua empresa tenha em mãos soluções de alto valor agregado. </div>
        </div>
      </div><!-- End / iconbox -->

      </div>
      <div class="col-sm-6 col-md-6 col-lg-3 ">
        
        <!-- iconbox -->
        <div class="iconbox iconbox__style-02">
          <div class="iconbox__icon"><i class="ti-star"></i></div>
          <div>
            <h2 class="iconbox__title"><a href="/contato">Treinamentos e Workshops</a></h2>
            <div class="iconbox__description">Temos uma equipe com especialistas em treinamentos, palestras, cursos, capacitações, workshops, planejados e desenvolvidos de acordo com as necessidades da sua empresa. Peça já seu orçamento que garantimos o melhor custo benefício.</div>
          </div>
        </div><!-- End / iconbox -->
        
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3 ">
        
        <!-- iconbox -->
        <div class="iconbox iconbox__style-02">
          <div class="iconbox__icon"><i class="ti-lock"></i></div>
          <div>
            <h2 class="iconbox__title"><a href="/contato">Treinamento e Consultoria em SI</a></h2>
            <div class="iconbox__description">Temos uma equipe multidisciplinar com especialistas em segurança e compliance voltados para o aconselhamento e promoção da cultura de segurança, através de workshops, cursos, capacitação, desenvolvimento de material e rotinas de testes aptos a preparar e orientar toda a sua equipe.</div>
          </div>
        </div><!-- End / iconbox -->
        
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3 ">
        
        <!-- iconbox -->
        <div class="iconbox iconbox__style-02">
          <div class="iconbox__icon"><i class="ti-comments"></i></div>
          <div>
            <h2 class="iconbox__title"><a href="/contato">Marketing Digital e Propaganda</a></h2>
            <div class="iconbox__description">Ter presença digital é fundamental para qualquer empresa. 
            Com o aumento do uso das tecnologias e das redes sociais, o marketing digital é cada vez mais essencial para ter sucesso. Promova sua empresa online e potencialize seus negócios por meio de redes sociais.</div>
          </div>
        </div><!-- End / iconbox -->
        
      </div>
      
      
    </div>
  </div>
</section>
<!-- End / Section -->

<!-- Our partner-->

<!-- Section -->
<section class="md-section produtos">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">
        
        <!-- title-01 -->
        <div class="title-01">
          <h2 class="title-01__title">Produtos</h2>
        </div><!-- End / title-01 -->
        
      </div>
    </div>
    
    <!-- carousel__element owl-carousel -->
    <div class="carousel__element owl-carousel" data-options='{"loop":false,"dots":false,"nav":true,"margin":30,"responsive":{"0":{"items":2},"768":{"items":3},"992":{"items":5}}}'>
      
      <div>
        <div class="brand-01__image"><a href="/nextcloud" target="_blank"><img src="img/nextcloud.png" alt="NextCloud"/></a></div>
      </div>
      <div>
        <div class="brand-01__image"><a href="ieducar" target="_blank"><img src="img/ieducar.png" alt="i-Educar"/></a></div>
      </div>
      <div>
        <div class="brand-01__image"><a href="#" target="_blank"><img src="img/matomo.png" alt="Matomo"/></a></div>
      </div>
      <div>
        <div class="brand-01__image"><a href="#" target="_blank"><img src="/img/mautic.png" alt="Mautic"/></a></div>
      </div>
      
    </div><!-- End / carousel__element owl-carousel -->
    
  </div>
</section>
<!-- End / Section -->

@endsection