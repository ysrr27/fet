@extends('app')

@section('content')

			<!-- HOME -->
			<!-- LAYER SLIDER -->
			<section id="slider">

				<div class="slider hidden-xs"><!-- hidden-xs-->

					<!--
						AVAILABLE CLASSES
							.height-300
							.height-350
							.height-400
							.height-450
							.height-500
							.height-550
							.height-600
							.height-650
							.height-700
							.height-750
							.height-800
					-->
					<div class="layerslider height-600" style="width:100%;">

						@include('slider')

					</div>

					<script type="text/javascript">
						var layer_options = {
							responsive: 		false,
							responsiveUnder: 	1280,
							layersContainer: 	1280,
							hoverPrevNext: 		true,
							skinsPath: 			'smarty/assets/plugins/slider.layerslider/skins/'
						}
					</script>

				</div>


				<div class="slider visible-xs"><!-- visible-xs-->

					<!--
						AVAILABLE CLASSES
							.height-300
							.height-350
							.height-400
							.height-450
							.height-500
							.height-550
							.height-600
							.height-650
							.height-700
							.height-750
							.height-800
					-->
					<div class="layerslider height-200" style="width:100%;">

						@include('slider')

					</div>

					<script type="text/javascript">
						var layer_options = {
							responsive: 		false,
							responsiveUnder: 	1280,
							layersContainer: 	1280,
							hoverPrevNext: 		true,
							skinsPath: 			'smarty/assets/plugins/slider.layerslider/skins/'
						}
					</script>

				</div>				




			</section>
			<!-- /LAYER SLIDER -->
			<!-- /HOME -->


			<section id="ilernus" class="heading-title parallax" style="background-image: url('smarty/assets/images/demo/cubes-azul.jpg');">
			<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>
				<div class="container">

					<div class="text-center">
						
					<h1 class="nomargin size-50 weight-300 wow fadeInUp" data-wow-delay="0.4s">{{trans('landing.fortaleceRelacion')}} <span style="color: #F47741"><strong>{{trans('landing.formacion')}}</strong></span> {{trans('landing.tusColaboradores')}} </h1>
					
					</div>

				</div>
			</section>

			<!-- -->
			<section>
				<div class="container text-center">

	


				

<br>
					<header class="text-center margin-bottom-60">
						<h2>{{trans('landing.queEsIlernus')}}</h2>
											<br>

						<p class="lead font-lato margin-bottom-60">
							{{trans('landing.laMejorSolucion')}} 
						</p>

						<ol class="lead text-left">
									<li>{{trans('nosotros.obj1')}}</li>
									<li>{{trans('nosotros.obj2')}}</li>
									<li>{{trans('nosotros.obj3')}}</li>
									<li>{{trans('nosotros.obj4')}}</li>
								</ol>						
						<hr />

					</header>


				</div>
			</section>
			<!-- / -->

			<section id="" class="heading-title parallax" style="background-image: url('smarty/assets/images/demo/cubes-azul.jpg');">
			<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">{{trans('landing.porQueElegirnos')}}</h3>
						<p>{{trans('landing.enI')}} <strong style="color: #F47741; font-size: 20px">{{trans('landing.Ilernus')}}</strong> {{trans('landing.queremosBrindarte')}} <em><b>{{trans('landing.mejor')}}</b></em></p>
					</div>

				</div>
			</section>

</div>
</section>







			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #005400">

				<div class="text-center">

					<h3 style="color: #ffffff">{{trans('landing.atributos')}}</h3>

				</div>

			</div>			



<section>
	<div class="container">		

				<div class="row">

					<div class="col-md-3">
							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-segumiento"></i>
									<h2>{{trans('landing.revisa')}}</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">{{trans('landing.seguimientoGestion')}} <br>{{trans('landing.profesionalColaboradores')}}</p>

							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-gestiona"></i>
									<h2>{{trans('landing.gestiona')}}</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">{{trans('landing.gestionaPreserva')}} <br>{{trans('landing.knowHow')}}</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-consolida"></i>
									<h2>{{trans('landing.consolida')}}</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">{{trans('landing.consolidaSimplifica')}} <br>{{trans('landing.tusColaboradores')}}</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-formacin"></i>
									<h2>{{trans('landing.forma')}}</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">{{trans('landing.formacion100')}} <br>{{trans('landing.cuandoDonde')}}</p>
							</div>

						</div>	

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-estadisticas"></i>
									<h2>{{trans('landing.provee')}}</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">{{trans('landing.proveeEstadisticas')}} <br>{{trans('landing.resultadosMedibles')}}</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-creamos"></i>
									<h2>{{trans('landing.desarrolla')}}</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">{{trans('landing.creamosBiblioteca')}} <br>{{trans('landing.desarrollandoContenidos')}}</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-biblioteca"></i>
									<h2>{{trans('landing.dispone')}}</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">{{trans('landing.bibliotecaPublica')}} <br>{{trans('landing.granVariedad')}}</p>
							</div>

						</div>

						<div class="col-md-3">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-captacion"></i>
									<h2>{{trans('landing.capacita')}}</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">{{trans('landing.capacitacionBasada')}} <br>{{trans('landing.instructoresAlto')}}</p>
							</div>

						</div>			

				</div>
	
				</div>
			</section>
			<!-- / -->



			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #005400">

				<div class="text-center">

					<h3 style="color: #ffffff">{{trans('landing.beneficios')}}</h3>

				</div>

			</div>	


<section>
	<div class="container">		

						<div class="col-md-5th">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-apalanca"></i>
									<h2>{{trans('landing.apalanca')}}</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">{{trans('landing.apalancaEstrategia')}} <br>{{trans('landing.retencionTalento')}}</p>
							</div>

						</div>

						<div class="col-md-5th">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-gestion"></i>
									<h2>{{trans('landing.facilita')}}</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">{{trans('landing.facilitaGestion')}} <bR>{{trans('landing.yEntretenimiento')}}</p>
							</div>

						</div>

						<div class="col-md-5th">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-tiempo"></i>
									<h2>{{trans('landing.ahorra')}}</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">{{trans('landing.tiempoRecursos')}}</p>
							</div>

						</div>

						<div class="col-md-5th">

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-refuerza"></i>
									<h2>{{trans('landing.recuerza')}}</h2>
								</a>
								<p style="font-size: 13px; text-align: center;">{{trans('landing.refuerzaProceso')}}</p>
							</div>

						</div>	

						<div class="col-md-5th"><!--col-md-3-->

							<div class="box-icon box-icon-center box-icon-color box-icon-round box-icon-transparent box-icon-large">
								<a class="box-icon-title">
									<i class="icon icon-herramientas"></i>
									<h2>{{trans('landing.aporta')}}</h2>
								</a>
								<p style="font-size: 13px; text-align: center;"> {{trans('landing.funcionesHerramientas')}} <br>{{trans('landing.aprendizajeProductividad')}}</p>
							</div>

						</div>								

				</div>	


				</div>
			</section>
			
			<section id="conocenos" class="heading-title parallax " style="background-image: url('smarty/assets/images/demo/cubes-azul.jpg');">
			<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">{{trans('landing.conocenos')}}</h3>
						<p>{{trans('landing.enI')}} <strong style="color: #F47741; font-size: 20px">{{trans('landing.Ilernus')}}</strong> {{trans('landing.ofrecemosAltaCalidad')}}</p>
					</div>

				</div>
			</section>

			<div id="directores" class="callout alert alert-default noborder noradius nomargin" style="background-color: #005400">

				<div class="text-center">
					<h3 style="color: #ffffff">{{trans('landing.equipoDirectivo')}}</h3>

				</div>

			</div>	
<!-- -->
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="testimonial-content nopadding">
								<p class="lead">{{trans('nosotros.text1')}}</p>
							</div>
						</div>
					</div>
				</div>
			</section>	

			<div id="gerentes" class="callout alert alert-default noborder noradius nomargin" style="background-color: #005400">

				<div class="text-center">
					<h3 style="color: #ffffff">{{trans('landing.equipoGerencial')}}</h3>

				</div>

			</div>	


			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="testimonial-content nopadding">
							<p class="lead">{{trans('nosotros.text2')}}</p><br>
							<p class="lead">{{trans('nosotros.text3')}}</p>

							</div>
						</div>
					</div>
				</div>
			</section>

<div id="objetivos" class="callout alert alert-default noborder noradius nomargin" style="background-color: #005400">

				<div class="text-center">
					<h3 style="color: #ffffff">{{trans('landing.objetivo')}}</h3>

				</div>

			</div>	


<section>
	<div class="container">


<div class="row">

	<div class="row">
						<div class="col-md-12">
								<ol class="lead">
									<li>{{trans('nosotros.obj1')}}</li>
									<li>{{trans('nosotros.obj2')}}</li>
									<li>{{trans('nosotros.obj3')}}</li>
									<li>{{trans('nosotros.obj4')}}</li>
								</ol>
						</div>
					</div>

</div>


	</div>


</section>


@endsection
