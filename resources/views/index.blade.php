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
					<p class="lead font-lato size-30 wow fadeInUp" data-wow-delay="0.7s">{{trans('landing.porMedio')}} <span style="color: #F47741"><strong>{{trans('landing.nuestrasSoluciones')}}</strong></span> {{trans('landing.organizacionales')}}</p>

					</div>

				</div>
			</section>

			<!-- -->
			<section>
				<div class="container text-center">

	


				

<br>
					<header class="text-center margin-bottom-60">
						<h2>{{trans('landing.queEsIlernus')}}</h2>
						<p class="lead font-lato margin-bottom-60">
							{{trans('landing.laMejorSolucion')}} <strong style="color: #35459C">{{trans('landing.contenidosMetodologia')}}</strong> {{trans('landing.solucionesGestion')}}
						</p>

						<h2>{{trans('landing.proyectoVision')}}</h2>
						<p class="lead font-lato margin-bottom-60">
							{{trans('landing.2015Nacio')}} <strong style="color: #F47741">{{trans('landing.innovadorasProductivas')}}</strong> {{trans('landing.objetivoLlevar')}}
						</p>						
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







			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

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



			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

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
						<p>{{trans('landing.enI')}} <strong style="color: #F47741; font-size: 20px">{{trans('landing.Ilernus')}}</strong> {{trans('landing.ofrecemosAltaCalidad')}} <em><b>e-learning</b></em></p>
					</div>

				</div>
			</section>

			<div id="directores" class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

				<div class="text-center">
					<br><br>
					<h3 style="color: #ffffff">{{trans('landing.equipoDirectivo')}}</h3>

				</div>

			</div>	
<!-- -->
<section >
	<div class="container">
		
<div class="row">

<?php
	$x=0;
?>
@foreach ($directores as $director) 

							<div class="modal fade" id="myModal{{$x}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">
							        	<span class="label" style="background-color: #35459C ">
											@if( App::getLocale() == 'es' )
												{{ $director->str_cargo }}
											@else
												{{ $director->str_cargo_en }}
											@endif

										</span>
							        </h4>
							      </div>
							      <div class="modal-body">
							      <h3>
							      	{{ $director->str_nombre }}
							      </h3>

							        <p class="justify">
										@if( App::getLocale() == 'es' )
											{!! $director->str_cv !!}
										@else
											{!! $director->str_cv_en !!}
										@endif
										</p>

							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-warning" data-dismiss="modal">{{trans('landing.cerrar')}}</button>
							      </div>
							    </div>
							  </div>
							</div>




	<div class="col-md-3">

		<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
			<div class="front">
				<div class="box1 box-default">
					<div class="box-icon-title">

						<img class="img-responsive" src="data:image/jpeg;base64,{{ $director->blb_img }}" alt="{!! $director->str_nombre !!}" />

						<!--<h2>{{ $director->str_nombre }}</h2>-->
					</div>
					
				</div>
			</div>

			<div class="back">
				<div class="box2" style="background-color: #35459C">
					<!--
					<h4>Director</h4>
					<hr />
					-->
					<p style="font-size: 11px">
						@if( App::getLocale() == 'es' )
							{{ $director->str_cv_corto }}
						@else
							{{ $director->str_cv_corto_en }}
						@endif

					</p>

					<br>

					<a href="#" style="color: #ffffff; font-weight: bold;" class="btn btn-reveal btn-warning" data-toggle="modal" data-target="#myModal{{$x}}">
						<i class="fa fa-plus"></i>
						<span>{{trans('landing.verMas')}}</span>
					</a>


				</div>
			</div>
		</div>

	</div>

<?php
	 $x++;
?>
@endforeach

</div>
	</div>
</section>		

			<div id="gerentes" class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

				<div class="text-center">
					<br><br>
					<h3 style="color: #ffffff">{{trans('landing.equipoGerencial')}}</h3>

				</div>

			</div>	


<section>
	<div class="container">


<div class="row">

<?php
	$x=0;
?>
@foreach ($ceos as $ceo)


							<div class="modal fade" id="myModalCeo{{$x}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">
							        	<span class="label" style="background-color: #35459C ">
											@if( App::getLocale() == 'es' )
												{{ $ceo->str_cargo }}
											@else
												{{ $ceo->str_cargo_en }}
											@endif

										</span>
							        </h4>
							      </div>
							      <div class="modal-body">
							      <h3>
							      	{{ $ceo->str_nombre }}
							      </h3>

							        <p class="justify">
										@if( App::getLocale() == 'es' )
											{!! $ceo->str_cv !!}
										@else
											{!! $ceo->str_cv_en !!}
										@endif

									</p>

							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-warning" data-dismiss="modal">{{trans('landing.cerrar')}}</button>
							      </div>
							    </div>
							  </div>
							</div>



	<div class="col-md-4 col-md-offset-4">

		<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
			<div class="front">
				<div class="box1 box-default">
					<div class="box-icon-title">

						<img class="img-responsive" src="data:image/jpeg;base64,{{ $ceo->blb_img }}" alt="{!! $ceo->str_nombre !!}" />

					</div>
					
				</div>
			</div>

			<div class="back">
				<div class="box2" style="background-color: #35459C">

					<p style="font-size: 11px">
						@if( App::getLocale() == 'es' )
							{{ $ceo->str_cv_corto }}
						@else
							{{ $ceo->str_cv_corto_en }}
						@endif

					</p>

					<a href="#" style="color: #ffffff; font-weight: bold;" class="btn btn-reveal btn-warning" data-toggle="modal" data-target="#myModalCeo{{$x}}">
						<i class="fa fa-plus"></i>
						<span>{{trans('landing.verMas')}}</span>
					</a>

				</div>
			</div>
		</div>
			<br>
	</div>
<?php
	$x++;
?>
@endforeach

</div>

<div class="row">

<?php
	$x=0;
?>
@foreach ($gerentes as $gerente)


							<div class="modal fade" id="myModalGerente{{$x}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">
							        	<span class="label" style="background-color: #35459C ">
											@if( App::getLocale() == 'es' )
												{{ $gerente->str_cargo }}
											@else
												{{ $gerente->str_cargo_en }}
											@endif

										</span>
							        </h4>
							      </div>
							      <div class="modal-body">
							      <h3>
							      	{{ $gerente->str_nombre }}
							      </h3>

							        <p class="justify">
										@if( App::getLocale() == 'es' )
											{!! $gerente->str_cv !!}
										@else
											{!! $gerente->str_cv_en !!}
										@endif

									</p>

							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-warning" data-dismiss="modal">{{trans('landing.cerrar')}}</button>
							      </div>
							    </div>
							  </div>
							</div>



	<div class="col-md-4">

		<div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
			<div class="front">
				<div class="box1 box-default">
					<div class="box-icon-title">

						<img class="img-responsive" src="data:image/jpeg;base64,{{ $gerente->blb_img }}" alt="{!! $gerente->str_nombre !!}" />

					</div>
					
				</div>
			</div>

			<div class="back">
				<div class="box2" style="background-color: #35459C">

					<p style="font-size: 11px">
						@if( App::getLocale() == 'es' )
							{{ $gerente->str_cv_corto }}
						@else
							{{ $gerente->str_cv_corto_en }}
						@endif

					</p>

					<a href="#" style="color: #ffffff; font-weight: bold;" class="btn btn-reveal btn-warning" data-toggle="modal" data-target="#myModalGerente{{$x}}">
						<i class="fa fa-plus"></i>
						<span>{{trans('landing.verMas')}}</span>
					</a>

				</div>
			</div>
		</div>
			<br>
	</div>
<?php
	$x++;
?>
@endforeach

</div>


	</div>


</section>




			<section id="soluciones" class="heading-title parallax" style="background-image: url('smarty/assets/images/demo/cubes-azul.jpg');">
			<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">{{trans('landing.soluciones')}}</h3>

<p>{{trans('landing.academia')}} <strong style="color: #F47741; font-size: 20px"> <i class="fa fa-circle" style="font-size: 5px" aria-hidden="true"></i> </strong> {{trans('landing.university')}} <strong style="color: #F47741; font-size: 20px"> <i class="fa fa-circle" style="font-size: 5px" aria-hidden="true"></i> </strong> {{trans('landing.producciones')}} </p>

						<p><em><b>{{trans('landing.unete')}}</b></em> {{trans('landing.nosotrosEn')}} <strong style="color: #F47741; font-size: 20px">iLernus</strong> {{trans('landing.estamosComprometidos')}}</p>



					</div>

				</div>
			</section>



			<!-- Portfolio -->
			<section >
				<div class="container">
					
			
		<div class="owl-carousel text-center owl-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 11000, "navigation": false, "pagination": true, "transitionStyle":"fade"}'>
			<div class="testimonial">
				
					<img class="img-responsive" src="smarty/assets/images/LOGOS-ILERNUS-FINAL-2017-05.png" style="width: 30%" alt="" />
				<br>
				<div class="testimonial-content nopadding">
				<br>
					<p class="lead">{{trans('landing.plataformaEducativa')}} <strong style="color: #F47741">{{trans('landing.aprendizajeLinea')}}</strong> {{trans('landing.permiteCapacitar')}}</p>
<b>1/3</b>
				</div>
			</div>
			<div class="testimonial">
				
					<img class="img-responsive" src="smarty/assets/images/LOGOS-ILERNUS-FINAL-2017-03.png" style="width: 30%" alt="" />
				<br>
				<div class="testimonial-content nopadding">
				<br>
					<p class="lead">{{trans('landing.ofreceConcepcion')}} <strong style="color: #F47741">{{trans('landing.serviciosInstruccionales')}}</strong> {{trans('landing.finesEducativos')}}</p>
<b>2/3</b>
				</div>
			</div>

			<div class="testimonial">
				
					<img class="img-responsive" src="smarty/assets/images/LOGOS-ILERNUS-FINAL-2017-04.png" style="width: 30%" alt="" />
				<br>
				<div class="testimonial-content nopadding">
				<br>
					<p class="lead">{{trans('landing.brinda')}} <strong style="color: #F47741">{{trans('landing.solucionesEducativas')}}</strong> {{trans('landing.nuestrasInstalaciones')}}</p>
<b>3/3</b>
				</div>
			</div>			
		</div>




</div>



</section>



			<section id="cursos" class="heading-title parallax " style="background-image: url('smarty/assets/images/demo/cubes-azul.jpg');">
			<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">{{trans('landing.nuestrosCursos')}}</h3>
<p>{{trans('landing.neogcios')}} <strong style="color: #F47741; font-size: 20px"> <i class="fa fa-circle" style="font-size: 5px" aria-hidden="true"></i> </strong> {{trans('landing.tecnologia')}} <strong style="color: #F47741; font-size: 20px"> <i class="fa fa-circle" style="font-size: 5px" aria-hidden="true"></i> </strong> {{trans('landing.desarrollo')}} <strong style="color: #F47741; font-size: 20px"> <i class="fa fa-circle" style="font-size: 5px" aria-hidden="true"></i> </strong> {{trans('landing.productividad')}}</p>
						<p>{{trans('landing.enI')}} <strong style="color: #F47741; font-size: 20px">iLernus</strong> {{trans('landing.ofrecemosCalidad')}} <em><b>e-learning</b></em></p>
					</div>

				</div>
			</section>


			<section>

			<div class="container text-center">

					<div class="row">

					<div id="portfolio" class="portfolio-nogutter">

						<ul class="nav nav-pills mix-filter margin-bottom-60">
							<li data-filter="all" class="filter active"><a href="#">{{trans('landing.todos')}}</a></li>
							<li data-filter="destacados" class="filter"><a href="#">{{trans('landing.destacados')}}</a></li>
							<li data-filter="negocios" class="filter"><a href="#">{{trans('landing.neogcios')}}</a></li>
							<li data-filter="tecnologia" class="filter"><a href="#">{{trans('landing.tecnologia')}}</a></li>
							<li data-filter="desarrollo" class="filter"><a href="#">{{trans('landing.desarrollo')}}</a></li>
							<li data-filter="productividad" class="filter"><a href="#">{{trans('landing.productividad')}}</a></li>
						</ul>

						<div class="row mix-grid">

						<?php
							$x=0;
						?>
						@foreach ($cursos as $curso) 

							<!-- Modal -->
							<div class="modal fade" id="myModalCursos{{$x}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header" style="text-align: left;">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">
							        	<span class="label" style="background-color: {{ $curso->str_color }}">
											@if( App::getLocale() == 'es' )
												{{$curso->str_categoria }}
											@else
												{{$curso->str_categoria_en }}
											@endif

										</span>
							        </h4>
							      </div>
							      <div class="modal-body" style="text-align: justify;">

							      <h3>
									  @if( App::getLocale() == 'es' )
										  {!! str_replace("-"," ",$curso->str_curso) !!}
									  @else
										  {{$curso->str_curso_en }}
									  @endif

							      </h3>
									  @if( App::getLocale() == 'es' )
										  {!! $curso->str_contenido !!}
									  @else
										  {!! $curso->str_contenido_en !!}
									  @endif


							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-warning" data-dismiss="modal">{{trans('landing.cerrar')}}</button>
							      </div>
							    </div>
							  </div>
							</div>

							<div class="{{ $curso->str_clase}}"><!-- item -->

								<div class="item-box"><br>
									<figure style="background-color: {{ $curso->str_color }}; cursor: pointer;" title="
									@if( App::getLocale() == 'es' )
									{!! str_replace("-"," ",$curso->str_curso) !!}
									@else
									{!!$curso->str_curso_en!!}
									@endif
											">
										<span class="item-hover">
											<span class="overlay dark-5"></span>								

												<span class="inner">

													<div class="row">

														<div class="col-md-8 text-center">

															<h3 style="color: #ffffff; font-size: 18px">
						
																<!--
																<!-- lightbox - ->
																<a class="ico-rounded lightbox" href="" data-plugin-options='{"type":"image"}'>
																	<span class="fa fa-search size-20"></span>
																</a>
																-->

																<!-- details -->
																<!--
																	<a class="ico-rounded" href="{{ route('curso',$curso->str_curso) }}" target="_blank">
																		<span class="fa fa-share size-20"></span>
																	</a>
																-->
																@if( App::getLocale() == 'es' )
																	{!! str_replace("-"," ",$curso->str_curso) !!}
																@else
																	{!!$curso->str_curso_en!!}
																@endif
														
															</h3>
											
														</div>
														
													</div>	

												</span>

											</span>

										<img class="img-responsive" src="{{ asset('smarty/assets/images/cursosilernus/'.$curso->str_imagen) }}" width="600" height="399" alt="">
										<span class="label" style="color: #FFFFFF; font-weight: bold;">
											@if( App::getLocale() == 'es' )
												{{ $curso->str_categoria }}
											@else
												{{ $curso->str_categoria_en }}
											@endif
										</span>
									</figure>

									<div class="item-box-desc">
										<h3>
                                        	
                                        	<!--
												aquí iba el titulo corto
                                        	-->

                                        	<!--
															<a href="#" style="color: #ffffff; " class="btn btn-reveal btn-warning" data-toggle="modal" data-target="#myModalCursos{{$x}}">
														<i class="fa fa-plus"></i>
														<span >Ver más</span>
													</a>
											-->
											</h3>
									<a href="#" data-toggle="modal" data-target="#myModalCursos{{$x}}">
									{{trans('landing.leer')}}
										<!-- /word rotator -->
										<span class="word-rotator" data-delay="2000">
											<span class="items">
												<span>{{trans('landing.mas')}}</span>
												<span>{{trans('landing.ahora')}}</span>
											</span>
										</span><!-- /word rotator -->
										<i class="glyphicon glyphicon-menu-right size-12"></i>
									</a>


										
										<!--
										<ul class="list-inline categories nomargin">
											<li>
												<a href="#">
													<span class="label" style="background-color: {{ $curso->str_color }}">{{ $curso->str_categoria }}</span>
												</a>
											</li>
										
										</ul>
										-->
									</div>

								</div>

							</div><!-- /item -->

							<?php
								 $x++;
							?>
						@endforeach
						</div>

					</div>
					</div>
				</div>
			</section>
			<!-- /Portfolio -->

			<!--
			<section id="testimonios" class="callout-dark heading-title heading-arrow-bottom" style="">
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">Testimonios</h3>
						<p><strong style="color: #F47741; font-size: 20px">ilernus,</strong> más que formación es <em><b>gestión</b></em></p>
					</div>

				</div>
			</section>
			-->
			<!--
			<section>
				<div class="container">

					<div class="row">
-->

							<!-- 
								data-plugin-options:
									"transitionStyle":"fadeUp" (fade,backSlide,goDown,fadeUp)

								Note: remove class="rounded" from the img for squared image!
							-->

<!--
							<div class="row">

								<div class="col-md-6">

									<div class="testimonial-bordered">
										<div class="owl-carousel text-center owl-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"fade"}'>
											
											<div class="testimonial">
												<figure>
													<img class="rounded" src="{{ asset('smarty/assets/images/demo/people/300x300/11-min.jpg') }}" alt="" />
												</figure>
												<div class="testimonial-content nopadding">
													<p class="lead">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero.</p>
													<cite>
														Joana Doe
														<span>Company Ltd.</span>
													</cite>
												</div>
											</div>

											<div class="testimonial">
												<figure>
													<img class="rounded" src="{{ asset('smarty/assets/images/demo/people/300x300/12-min.jpg') }}" alt="" />
												</figure>
												<div class="testimonial-content nopadding">
													<p class="lead">voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa.</p>
													<cite>
														Melissa Doe
														<span>Company Ltd.</span>
													</cite>
												</div>
											</div>

										</div>
									</div>


								</div>

							<div class="col-md-6">

								<div class="testimonial-bordered">
									<div class="owl-carousel text-center owl-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"fade"}'>
										
										<div class="testimonial">
											<figure>
												<img class="rounded" src="{{ asset('smarty/assets/images/demo/people/300x300/11-min.jpg') }}" alt="" />
											</figure>
											<div class="testimonial-content nopadding">
												<p class="lead">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero.</p>
												<cite>
													Joana Doe
													<span>Company Ltd.</span>
												</cite>
											</div>
										</div>

										<div class="testimonial">
											<figure>
												<img class="rounded" src="{{ asset('smarty/assets/images/demo/people/300x300/12-min.jpg') }}" alt="" />
											</figure>
											<div class="testimonial-content nopadding">
												<p class="lead">voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa.</p>
												<cite>
													Melissa Doe
													<span>Company Ltd.</span>
												</cite>
											</div>
										</div>

									</div>
								</div>							
							
							</div>



							</div>




					</div>
				</div>
			</section>		

-->


			<!-- PARALLAX -->

			<!--
			<section class="parallax parallax-2" style="background-image: url('smarty/assets/images/demo/1200x800/35.jpg');">
				<div class="overlay dark-5"></div>

				<div class="container">

									
					<div class="row countTo-sm text-center">

						<div class="col-xs-6 col-sm-3 col-xs-6" style="cursor: pointer;" title="Instructores de ilernus">
							

							<a href="{{ route('instructores') }}" target="_blank">

								<i class="fa fa-users" style="font-size: 50px" aria-hidden="true"></i>
								<div class="block size-50" style="color: #F47741;">
									<strong class="countTo size-50" data-speed="3000">18</strong>
								</div>
								<h3 class="size-15 margin-top-10 margin-bottom-0">INSTRUCTORES</h3>

							</a>


						</div>

						<div class="col-xs-6 col-sm-3 col-xs-6">
							<i class="fa fa-graduation-cap" style="font-size: 50px" aria-hidden="true"></i>
							<div class="block size-50" style="color: #41B649;">
								<strong class="countTo size-50" data-speed="3000">100</strong>
							</div>
							<h3 class="size-15 margin-top-10 margin-bottom-0">CURSOS E-LEARNING IMPARTIDOS</h3>
						</div>

						<div class="col-xs-6 col-sm-3 col-xs-6">
							<i class="fa fa-laptop" style="font-size: 50px" aria-hidden="true"></i>
							<div class="block size-50" style="color: #35459C;">
								<strong class="countTo size-50" data-speed="3000">30</strong>
							</div>
							<h3 class="size-15 margin-top-10 margin-bottom-0">PROYECTOS Y CONTENIDOS VIRTUALIZADOS</h3>
						</div>

						<div class="col-xs-6 col-sm-3 col-xs-6">
							<i class="fa fa-smile-o" style="font-size: 50px" aria-hidden="true"></i>
							<div class="block size-50" style="color: #7952A1;">
								<strong class="countTo size-50" data-speed="3000">3</strong>
							</div>
							<h3 class="size-15 margin-top-10 margin-bottom-0">CLIENTES FELICES</h3>
						</div>

					</div>

					

				</div>

			</section>-->
			<!-- /PARALLAX -->
			






@endsection
