@extends('app')

@section('content')

			<section id="" class="heading-title parallax" style="background-image: url('smarty/assets/images/demo/cubes-azul.jpg');">
			<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">{{trans('politicas.politicasPrivacidad')}}</h3>
						<p>{{trans('landing.enI')}} <strong style="color: #F47741; font-size: 20px">iLernus,</strong> {{trans('contacto.adaptamos')}} <em><b>{{trans('contacto.ti')}}</b></em></p>
					</div>

				</div>
			</section>
		

			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #35459C">

				<div class="text-center">

					<h3 style="color: #ffffff">{{trans('contacto.estamos')}}</h3>

				</div>

			</div>



			<section>
				<div class="container">		

					<div class="row">
						<div class="col-md-6">
							<h4>{{trans('politicas.introduccion')}}</h4>
								<p style="text-align: justify;">
									{{trans('politicas.text1')}}
									<ul style="text-align: justify;">
										<li>
											{{trans('politicas.text2')}}
										</li>
										<li>
											{{trans('politicas.text3')}}
										</li>

									</ul>

								</p>

								<h4>{{trans('politicas.text4')}}</h4>

								<p style="text-align: justify;">
									{{trans('politicas.text5')}}
								</p>

								<h4>{{trans('politicas.text6')}}</h4>

								<p style="text-align: justify;">
									{{trans('politicas.text7')}}
									<br>
									{{trans('politicas.text8')}}
									<br>
									{{trans('politicas.text9')}}
									<br>
									{{trans('politicas.text10')}}

								</p>



						</div>

						<div class="col-md-6">


							<h4>{{trans('politicas.text11')}}</h4>

							<p style="text-align: justify;">
								{{trans('politicas.text12')}}
							</p>


							<h4>{{trans('politicas.text13')}}</h4>

							<p style="text-align: justify;">
								{{trans('politicas.text14')}}
								<br>
								{{trans('politicas.text15')}}
								<br>
								{{trans('politicas.text16')}}
								<br>
								{{trans('politicas.text17')}}

							</p>

							<h4>{{trans('politicas.text18')}}</h4>

							<p style="text-align: justify;">
								{{trans('politicas.text19')}}
								<br>
								{{trans('politicas.text20')}}
								<br>
								{{trans('politicas.text21')}}

							</p>

							<h4>{{trans('politicas.text22')}}</h4>

							<p style="text-align: justify;">
								{{trans('politicas.text23')}}
							</p>

						
						</div>
					</div>

				</div>
			</section>
			<!-- / -->

@endsection					