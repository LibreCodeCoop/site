<?php
$page->transparent = true;
?>
@extends('_layouts.master')

@section('body')
<!-- slider -->
<div class="slider">
  
  <!-- carousel__element owl-carousel -->
  <div class="carousel__element owl-carousel" data-options='{"items":1,"loop":true,"dots":false,"nav":false,"margin":0, "autoplay": true, "autoplayTimeout": 10000}'>
    <div class="slider__item" >
      <div class="md-tb">
        <div class="md-tb__cell">
          <div class="slider__content">
            <div class="container">
              <h2>SOLUÇÕES EM TECNOLOGIA</h2>
              <p>Desenvolvemos produtos digitais com agilidade, inovação e qualidade técnica, para que o mercado brasileiro acompanhe a velocidade do crescimento tecnológico mundial.
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End / carousel__element owl-carousel -->
  
</div><!-- End / slider -->

<!-- Service-->

<!-- Section -->
<section class="md-section" style="background-color:#f7f7f7;padding:0;">
  <div class="container">
    <div class="textbox-group">
      <div class="row">
        <div class="col-md-4 col-lg-4 ">
          
          <!-- textbox -->
          <div class="textbox">
            <div class="textbox__image"><img src="img/services/7.jpg" alt=""/></div>
            <div class="textbox__body">
              <h2 class="textbox__title">Quem somos?</h2>
              <div class="textbox__description">Somos uma empresa com foco em Tecnologia da Informação e desenvolvimento de sistemas, composta por profissionais experientes e qualificados no mercado de trabalho.</div>
            </div>
          </div><!-- End / textbox -->
          
        </div>
        <div class="col-md-4 col-lg-4 ">
          
          <!-- textbox -->
          <div class="textbox">
            <div class="textbox__image"><img src="img/services/3.jpg" alt=""/></div>
            <div class="textbox__body">
              <h2 class="textbox__title">Cooperativismo</h2>
              <div class="textbox__description">Cooperativa é uma sociedade civil, sem fins lucrativos, constituída por profissionais voltados a desenvolver a economia de forma organizada e coletiva.</div>
            </div>
          </div><!-- End / textbox -->
          
        </div>
        <div class="col-md-4 col-lg-4 ">
          
          <!-- textbox -->
          <div class="textbox">
            <div class="textbox__image"><img src="img/services/8.jpg" alt=""/></div>
            <div class="textbox__body">
              <h2 class="textbox__title">Treinamentos</h2>
              <div class="textbox__description">Temos uma equipe com especialistas em treinamentos, palestras, cursos, capacitações, workshops, planejados e desenvolvidos de acordo com as necessidades da sua empresa.</div>
            </div>
          </div><!-- End / textbox -->
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End / Section -->


<!-- Section -->
<section class="md-section" style="background-color:#f7f7f7;padding-top:0;">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-lg-8 offset-0 offset-sm-0 offset-md-1 offset-lg-2 ">
        
        <!-- iconbox -->
        <div class="iconbox">
          <div class="iconbox__icon"><i class="ti-headphone-alt"></i></div>
          <div>
            <h2 class="iconbox__title">Profissionais altamente qualificados</h2>
            <div class="iconbox__description">Em nosso time temos profissionais altamente qualificados e especialistas renomados nacionalmente para realizarem seus sonhos por meio da tecnologia.</div>
          </div>
        </div><!-- End / iconbox -->
        
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-3 ">
        
        <!-- iconbox -->
        <div class="iconbox iconbox__style-02">
          <div class="iconbox__icon"><i class="ti-announcement"></i></div>
          <div>
            <h2 class="iconbox__title"><a href="/contato">Marca e identidade visual</a></h2>
            <div class="iconbox__description">Criação de marca e identidade visual para sua empresa.</div>
          </div>
        </div><!-- End / iconbox -->
        
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3 ">
        
        <!-- iconbox -->
        <div class="iconbox iconbox__style-02">
          <div class="iconbox__icon"><i class="ti-headphone"></i></div>
          <div>
            <h2 class="iconbox__title"><a href="/contato">Marketing digital</a></h2>
            <div class="iconbox__description">Promova sua empresa online e potencialize seus negócios por meio de redes sociais.</div>
          </div>
        </div><!-- End / iconbox -->
        
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3 ">
        
        <!-- iconbox -->
        <div class="iconbox iconbox__style-02">
          <div class="iconbox__icon"><i class="ti-timer"></i></div>
          <div>
            <h2 class="iconbox__title"><a href="/contato">Treinamentos e workshops</a></h2>
            <div class="iconbox__description">Temos uma equipe com especialistas em treinamentos, palestras, cursos, capacitações, workshops, planejados e desenvolvidos de acordo com as necessidades da sua empresa.</div>
          </div>
        </div><!-- End / iconbox -->
        
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3 ">
        
        <!-- iconbox -->
        <div class="iconbox iconbox__style-02">
          <div class="iconbox__icon"><i class="ti-briefcase"></i></div>
          <div>
            <h2 class="iconbox__title"><a href="/contato">Desenvolvimento de sistemas</a></h2>
            <div class="iconbox__description">Faça com os melhores! Desenvolvimento de aplicações web e aplicativos mobile híbridos.</div>
          </div>
        </div><!-- End / iconbox -->
        
      </div>
    </div>
  </div>
</section>
<!-- End / Section -->

<!-- Our partner-->

<!-- Section -->
<section class="md-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-lg-8 offset-0 offset-sm-0 offset-md-2 offset-lg-2 ">
        
        <!-- title-01 -->
        <div class="title-01">
          <h2 class="title-01__title">Nossos parceiros</h2>
        </div><!-- End / title-01 -->
        
      </div>
    </div>
    
    <!-- carousel__element owl-carousel -->
    <div class="carousel__element owl-carousel" data-options='{"loop":false,"dots":false,"nav":true,"margin":30,"responsive":{"0":{"items":2},"768":{"items":3},"992":{"items":5}}}'>
      
      <div>
        <div class="brand-01__image"><a href="http://php.rio" target="_blank"><img src="img/brands/1.png" alt="PHPRio"/></a></div>
      </div>
      <div>
        <div class="brand-01__image"><a href="http://ocbrj.coop.br/" target="_blank"><img src="img/brands/2.png" alt="SescoopRJ"/></a></div>
      </div>
      <div>
        <div class="brand-01__image"><a href="https://twitter.com/PHPWomenBR" target="_blank"><img src="img/brands/3.png" alt="PHPWomen BR"/></a></div>
      </div>
      <div>
        <div class="brand-01__image"><a href="https://phpzm.rocks/" target="_blank"><img src="/img/brands/4.png" alt="phpZM"/></a></div>
      </div>
      
    </div><!-- End / carousel__element owl-carousel -->
    
  </div>
</section>
<!-- End / Section -->
@endsection
