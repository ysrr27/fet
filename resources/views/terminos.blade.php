@extends('app')

@section('content')

			<section id="" class="heading-title parallax" style="background-image: url('smarty/assets/images/demo/cubes-azul.jpg');">
			<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">{{trans('terminos.terminosServicio')}}</h3>
						<p class="">{{trans('landing.enI')}} <strong style="color: #F47741; font-size: 20px">iLernus,</strong> {{trans('contacto.adaptamos')}} <em><b>{{trans('contacto.ti')}}</b></em></p>
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

							<h4>{{trans('terminos.terminosCondiciones')}}</h4>

							<p class="justify">
								{{trans('terminos.text1')}} <b>{{trans('terminos.text2')}}</b>, {{trans('terminos.text3')}} <b>{{trans('terminos.text2')}}</b>
								{{trans('terminos.text4')}}

							<h4>{{trans('terminos.text5')}}</h4>

							<p class="justify">
								<b><b>{{trans('terminos.text2')}}</b> (ILERNUS)</b> {{trans('terminos.text6')}}

								<b><b>{{trans('terminos.text2')}}</b> (ILERNUS)</b>,   {{trans('terminos.text7')}}
								<b><b>{{trans('terminos.text2')}}</b> (ILERNUS)</b>  {{trans('terminos.text8')}}

								<ul>
									<li>{{trans('terminos.text9')}}</li>
									<li>{{trans('terminos.text10')}}</li>
									<li>{{trans('terminos.text11')}}</li>
									<li>{{trans('terminos.text12')}}</li>
									<li>{{trans('terminos.text13')}}</li>
									<li>{{trans('terminos.text14')}}</li>
									<li>{{trans('terminos.text15')}}</li>
									<li>{{trans('terminos.text16')}}</li>
									<li>{{trans('terminos.text17')}}</li>
									<li>{{trans('terminos.text18')}}</li>

								</ul>

							</p>

							<h4>{{trans('terminos.terminosServicio')}}</h4>
							<p class="justify">
								{{trans('terminos.text19')}}
								<ol>
									<li>{{trans('terminos.text20')}}</li>
									<li>{{trans('terminos.text21')}} </li>
									<li>{{trans('terminos.text22')}}</li>
									<li>{{trans('terminos.text23')}} <b><b>{{trans('terminos.text2')}}</b> (ILERNUS)</b> {{trans('terminos.text24')}}</li>
								</ol>

							</p>

							<h4>{{trans('terminos.text25')}} </h4>

							<p class="justify">
								{{trans('terminos.text26')}} <b>{{trans('terminos.text2')}}</b>, {{trans('terminos.text27')}}
							</p>

						</div>

						<div class="col-md-6">

							<p class="justify">
								{{trans('terminos.text28')}} <b>{{trans('terminos.text2')}}</b>, {{trans('terminos.text29')}} <b>{{trans('terminos.text2')}}</b>, {{trans('terminos.text30')}} <b>{{trans('terminos.text2')}}</b> {{trans('terminos.text31')}} <b>{{trans('terminos.text2')}}</b>
							</p>

							<h4>{{trans('terminos.text44')}}</h4>
							<p class="justify">

								{{trans('terminos.text32')}}

								<ol>
									<li>
										{{trans('terminos.text33')}}
									</li>
									<li>
										{{trans('terminos.text34')}}
									</li>
									<li>
										{{trans('terminos.text35')}}
									</li>
									<li>
										{{trans('terminos.text36')}}
									</li>
									<li>
										{{trans('terminos.text37')}}
									</li>
								</ol>

								{{trans('terminos.text38')}} <b>{{trans('terminos.text2')}}</b> {{trans('terminos.text39')}}
								 <b><b>{{trans('terminos.text2')}}</b> (ILERNUS)</b>  {{trans('terminos.text40')}}

								<br><br>
								{{trans('terminos.text41')}}

								<br>

							{{trans('terminos.text42')}}
								<br>
							{{trans('terminos.text43')}}
								<ul>
									<li>
										{{trans('contacto.correoE')}}: ilernus@ilernus.com
									</li>
									<li>
										{{trans('contacto.telefono')}}: 0800-iLernus
									</li>
								</ul>
							</p>

						</div>
					</div>

				</div>
			</section>
			<!-- / -->

@endsection					