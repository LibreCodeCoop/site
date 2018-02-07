<?php
$page->title = 'Soluções';
$page->subtitle = 'Conheça nossas soluções';
?>
@extends('_layouts.page')

@section('body')
<!-- Section -->
<section class="md-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-xl-8 offset-0 offset-sm-0 offset-md-0 offset-lg-1 offset-xl-2 ">
				
				<!-- title-01 -->
				<div class="title-01 title-01__style-04">
					<h6 class="title-01__subTitle">{{ $page->title }}</h6>
					<h2 class="title-01__title">Lyseon Tech - Soluções Tecnológicas</h2>
					<div>A Lyseon Tech é uma cooperativa de trabalho com modelo de gestão democrática, segura e eficiente composta por profissionais de T.I. altamente qualificados e experientes no mercado. Prezamos por apresentar vantagens, tanto para o cooperado como para as empresas parceiras e para isso oferecemos para seu negócio as seguintes soluções:
					<ul class="sobre-solucoes">
					   <li>Desenvolvimento de Sistemas (web, mobile e desktop)</li>
                     <li>Consultoria Geral em T.I.</li>
                     <li>Projeto e administração de Banco de Dados</li>
                     <li>Consultoria em Informações Gerenciais</li>
                     <li>Análise de Softwares</li>
                     <li>Auditoria de Sistemas</li>
                     <li>Treinamentos Especializados</li>
                     <li>Outsourcing</li>
                     <li>Projetos de Redes Locais</li>
                     <li>Marketing Digital</li>
                     <li>Criação de Logomarca</li>
                     <li>Criação e reestruração de identidade visual</li>
					</ul>
					</div>
				</div><!-- End / title-01 -->
				
			</div>
		</div>
	</div>
</section>
<!-- End / Section -->


<!-- Our Advisors-->

<!-- Section -->

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
        <div class="carousel__element owl-carousel"
             data-options='{"loop":false,"dots":false,"nav":true,"margin":30,
             "responsive":{"0":{"items":2},"768":{"items":3},"992":{"items":5}}}'>
            <div>
                <div class="brand-01__image">
                    <a href="http://php.rio" target="_blank">
                        <img src="/img/brands/1.png" alt="PHPRio"/>
                    </a>
                </div>
            </div>
            <div>
                <div class="brand-01__image">
                    <a href="http://ocbrj.coop.br/" target="_blank">
                        <img src="/img/brands/2.png" alt="SescoopRJ"/>
                    </a>
                </div>
            </div>
            <div>
                <div class="brand-01__image">
                    <a href="https://twitter.com/PHPWomenBR" target="_blank">
                        <img src="/img/brands/3.png" alt="PHPWomen BR"/>
                    </a>
                </div>
            </div>
            <div>
                <div class="brand-01__image">
                    <a href="https://phpzm.rocks/" target="_blank">
                        <img src="/img/brands/4.png" alt="phpZM"/>
                    </a>
                </div>
            </div>
        </div><!-- End / carousel__element owl-carousel -->

    </div>
</section>
<!-- End / Section -->
@endsection