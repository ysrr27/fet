@extends('app2')

@section('content')


			<!-- 
				PAGE HEADER 
				
				CLASSES:
					.page-header-xs	= 20px margins
					.page-header-md	= 50px margins
					.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
					.dark			= dark page header

					.shadow-before-1 	= shadow 1 header top
					.shadow-after-1 	= shadow 1 header bottom
					.shadow-before-2 	= shadow 2 header top
					.shadow-after-2 	= shadow 2 header bottom
					.shadow-before-3 	= shadow 3 header top
					.shadow-after-3 	= shadow 3 header bottom
			-->
			

			<section class="page-header page-header-lg parallax parallax-3" style="background-image:url('{{ asset('smarty/assets/images/demo/cubes-azul.jpg') }}'); ">

				<div class="overlay dark-2"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<h1 style="font-size: 35px"><span class="label" style="background-color: #000000"><i class="fa fa-chain-broken" aria-hidden="true"></i> Error 404:</span></h1>

				</div>
			</section>
			<!-- /PAGE HEADER -->

			<section>
		


				<div class="container" style="">
	                <div class="" style="text-align: center;">
	                    <h1 class="">Página no encontrada</h1>
	                    Parece que ha habido un error con la página que estabas buscando.<br>
	                    Es posible que la página ya no este disponible, o que la dirección no exista.<br>
	                    <h1><i class="fa fa-frown-o"></i></h1>
	                    
	                    <p>
	                        <a href="{{ route('home') }}">
	                            <button type="button" class="btn" style="background-color: #35459C; color: #ffffff">Volver al inicio</button>
	                        </a>
	                    </p>
	
	                </div>
	                <div class="spacer-30"></div>
	            </div>

			</section>
			<!-- / -->


			<!-- 

			FULLWIDTH: OUTSIDE OF <section> 

				Available Classes:
				alert-default
				alert-info
				alert-warning
				alert-danger
				alert-success
			-->

			<div class="alert alert-transparent bordered-bottom">
				<div class="container">

					<div class="row">

						<div class="col-md-8 col-sm-8"><!-- left text -->
							<h3>Estamos para ti <span><strong style="color: #35459C">envíanos tus preguntas y comentarios</strong></span> o visitanos</h3>
							<p class="font-lato weight-300 size-20 nomargin-bottom">
								Urbanización Terrazas del Avila, Zona Rental Universidad Metropolitana. Edificio 1. Piso 1. Oficina ilernus. Caracas, Estado Miranda.
							</p>
						</div><!-- /left text -->

						
						<div class="col-md-4 col-sm-4 text-right" ><!-- right btn -->
							<a href="http://localhost:8000/Contáctanos" rel="nofollow" target="_blank" style="background-color: #F47741; color: #FFF; border: 0px" class="btn btn-primary btn-lg">CONTACTANOS</a>
						</div><!-- /right btn -->

					</div>

				</div>
			</div>

		
@endsection





					            
