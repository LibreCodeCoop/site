<?php
$page->title = 'Contato';
$page->subtitle = 'Estamos prontos para te ouvir';
?>
@extends('_layouts.page')

@section('body')
<!-- Content-->
<div class="md-content">
	
	<!-- Section -->
	<section class="md-section js-consult-form" style="background-color:#f7f7f7;">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 ">
					
					<!-- iconbox -->
					<div class="iconbox iconbox__style-04">
						<div class="iconbox__icon"><i class="ti-email"></i></div>
						<div>
							<h2 class="iconbox__title"><a href="mailto:contato@lt.coop.br">Email</a></h2>
							<div class="iconbox__description">contato@lt.coop.br</div>
						</div>
					</div><!-- End / iconbox -->
					
				</div>
				<div class="col-lg-6 ">
					
					<!-- iconbox -->
					<div class="iconbox iconbox__style-04">
						<div class="iconbox__icon"><i class="ti-mobile"></i></div>
						<div>
							<h2 class="iconbox__title"><a href="#">Telefone</a></h2>
							<address class="iconbox__description">+55 21 96950-1266</address>
						</div>
					</div><!-- End / iconbox -->
					
				</div>
			</div>
			
			<!-- form-01 -->
			<div class="form-01 consult-form js-consult-form__content" id="form01">
				<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdIWHHvNFEdRgcHZ71hAlO_UdkOZ2PQsbURNeXzXbpMhB1ppw/viewform?embedded=true" width="100%" height="1000" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
			</div><!-- End / form-01 -->
			
		</div>
	</section>
	
@endsection
	<!-- End / Section -->
	
</div>
<!-- End / Content-->
