@extends('app')

@section('content')

			<section id="" class="heading-title parallax" style="background-image: url('smarty/assets/images/demo/cubes-azul.jpg');">
			<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">{{trans('instructores.academiaIns')}}</h3>
						<p>{{trans('landing.enI')}} <strong style="color: #F47741; font-size: 20px">iLernus</strong> {{trans('instructores.contamos')}}<em><b>{{trans('instructores.excelencia')}}</b></em></p>
					</div>

				</div>
			</section>

			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

				<div class="text-center">

					<h3 style="color: #ffffff">{{trans('instructores.formados')}}</h3>

				</div>

			</div>	<br>

			<!-- -->
			<section>
				<div class="container">

					<div class="row">

						<?php
							$x=0;
						?>
@foreach ($instructores as $instructor) 

							<div class="modal fade" id="myModal{{$x}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">
							        	<span class="label" style="background-color: #35459C ">
											@if( App::getLocale() == 'es' )
												{{ $instructor->str_profesion }}
											@else
												{{ $instructor->str_profesion_en }}
											@endif
										</span>
							        </h4>
							      </div>
							      <div class="modal-body">
							      <h3>
							      	{{ $instructor->str_nombre }}
							      </h3>
									  @if( App::getLocale() == 'es' )
										  {!! $instructor->str_cv !!}
									  @else
										  {!! $instructor->str_cv_en !!}
									  @endif

							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-warning" data-dismiss="modal">{{trans('landing.cerrar')}}</button>
							      </div>
							    </div>
							  </div>
							</div>




						<!-- POST ITEM -->
						<div class="blog-post-item col-md-3 col-sm-6" style="text-align: center;">

							<!-- IMAGE -->
							<figure class="margin-bottom-20" style="text-align: center;">

								<img class="img-responsive" src="data:image/jpeg;base64,{{ $instructor->blb_img }}" alt="{!! $instructor->str_nombre !!}" title="{!! $instructor->str_nombre !!}" style=" width: 100px">

							</figure>

							<h2 style="text-align: center;"><a href="#" data-toggle="modal" data-target="#myModal{{$x}}" >{{ $instructor->str_nombre }}</a></h2>

							<p>
								@if( App::getLocale() == 'es' )
									{{ $instructor->str_profesion}}
								@else
									{{ $instructor->str_profesion_en}}
								@endif
							</p>

							<a href="#" style="color: #ffffff; font-weight: bold;" class="btn btn-reveal btn-warning" data-toggle="modal" data-target="#myModal{{$x}}">
								<i class="fa fa-plus"></i>
								<span>{{trans('landing.verMas')}}</span>
							</a>


						</div>
						<!-- /POST ITEM -->
							<?php
								 $x++;
							?>
@endforeach
						

					</div>



				</div>
			</section>
			<!-- / -->

@endsection					
