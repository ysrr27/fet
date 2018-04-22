@extends('app')

@section('content')

			<section id="contacto" class="heading-title parallax" style="background-image: url('smarty/assets/images/demo/cubes-azul.jpg');">
			<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>
				<div class="container">

					<div class="text-center">
						<h3 class="size-30">{{trans('contacto.contactanos')}}</h3>
						<p>{{trans('landing.enI')}} <strong style="color: #F47741; font-size: 20px">FUNDACIÓN EQUIPO TECNICO,</strong> {{trans('contacto.adaptamos')}} <em><b>{{trans('contacto.ti')}}</b></em></p>
					</div>

				</div>
			</section>
		
			<div class="callout alert alert-default noborder noradius nomargin" style="background-color: #005400">

				<div class="text-center">

					<h3 style="color: #ffffff">{{trans('contacto.estamos')}}</h3>

				</div>

			</div>



			<section>
				<div class="container">		

					<div class="row">

						<!-- FORM -->
						<div class="col-md-8 col-sm-8">

							<h3>{{trans('contacto.envianos')}}</h3>

				
                    			@if(Session::has('message'))
					            
									<div id="mensaje-enviado" class="alert alert-success" role="alert">
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									  <span aria-hidden="true">&times;</span></button>
									  <strong><i class="fa fa-check"></i></strong> {{Session::get('message')}}
									</div>

								@endif  							

							{!! Form::open(['route' => 'enviar', 'method'=>'PUT', 'id' => 'demo-form', 'enctype'=>'multipart/form-data', 'class' => '', 'onKeypress' => 'if(event.keyCode == 13) event.returnValue = false']) !!} 

								<fieldset>
									<input type="hidden" name="action" value="contact_send" />

									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label for="name">{{trans('contacto.nombreApellido')}}</label>
												<input required type="text" value="" class="form-control" name="name" id="name">
											</div>
											<div class="col-md-4">
												<label for="email">{{trans('contacto.correoE')}}</label>
												<input required type="email" value="" class="form-control" name="email" id="email">
											</div>
											<div class="col-md-4">
												<label for="phone">{{trans('contacto.telefono')}}</label>
												<input required type="text" class="form-control masked" data-format="(9999) 999-99-99" data-placeholder="X" placeholder="" name="phone" id="phone">

												
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">

											<div class="col-md-4">
												<label for="cargo">{{trans('contacto.cargo')}}</label>
												<select required class="form-control pointer" id="cargo" name="cargo" onchange="showfield(this.options[this.selectedIndex].value)">
													<option value="">--- {{trans('contacto.seleccion')}} ---</option>
													<option value="Director">{{trans('contacto.director')}}</option>
													<option value="Gerente">{{trans('contacto.gerente')}}</option>
													<option value="otros">{{trans('contacto.otros')}}</option>
												</select>
												<div id="div1"></div>
											</div>
											<div class="col-md-4">
													<label for="sector">{{trans('contacto.sectorInd')}}</label>
													<select required class="form-control pointer" id="sector" name="sector" onchange="showfield2(this.options[this.selectedIndex].value)">
														<option value="">--- {{trans('contacto.seleccion')}} ---</option>
														<option value="Salud">{{trans('contacto.salud')}}</option>
														<option value="Medios de Comunicación">{{trans('contacto.mediosCom')}}</option>
														<option value="Deportes">{{trans('contacto.deportes')}}</option>
														<option value="Tecnología">{{trans('contacto.tecnologia')}}</option>
														<option value="Educación">{{trans('contacto.educacion')}}</option>
														<option value="Comercio">{{trans('contacto.comercio')}}</option>
														<option value="Transporte y Comunicaciones">{{trans('contacto.transporteCom')}}</option>
														<option value="Turismo">{{trans('contacto.turismo')}}</option>
														<option value="Banca/Finanzas">{{trans('contacto.bancaFin')}}</option>
														<option value="Seguros">{{trans('contacto.seguros')}}</option>
														<option value="Administración Pública">{{trans('contacto.adminstracion')}}</option>
														<option value="Marketing">{{trans('contacto.marketing')}}</option>
														<option value="Capital Humano">{{trans('contacto.capitalHum')}}</option>
														<option value="otros">{{trans('contacto.otros')}}</option>
													</select>
													<div id="div2"></div>
												</div>											
											<div class="col-md-4">
													<label for="contact_asunto">{{trans('contacto.asunto')}}</label>
													<select required class="form-control pointer" id="asunto" name="asunto">
														<option value="">--- {{trans('contacto.seleccion')}} ---</option>
														<option value="Comentarios">{{trans('contacto.comentarios')}}</option>
														<option value="Sugerencias">{{trans('contacto.sugerencias')}}</option>
													</select>
												</div>											
											</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="message">{{trans('contacto.mensaje')}} *</label>
												<textarea required maxlength="10000" rows="8" class="form-control" name="message" id="message"></textarea>
											</div>
										</div>
									</div>

								</fieldset>

								<div class="row">
									<div class="col-md-12">
										{!! Form::submit(trans('contacto.enviar'),['class' => 'btn btn-primary']) !!}
									</div>
								</div>
							{!! Form::close() !!}

						</div>
						<!-- /FORM -->

						<!-- INFO -->
						<div class="col-md-4 col-sm-4">

							<h2><strong style="color: #F47741"><em>¡{{trans('contacto.visitanos')}}!</em></strong></h2>

							<!-- 
							Available heights
								height-100
								height-150
								height-200
								height-250
								height-300
								height-350
								height-400
								height-450
								height-500
								height-550
								height-600
							-->

							<p>
								<span class="block"><strong><i class="fa fa-map-marker"></i> {{trans('contacto.direccion')}}:</strong> {{trans('contacto.mezzanina')}}</span>
								<span class="block"><strong><i class="fa fa-phone"></i> {{trans('contacto.telefono')}}:</strong> <a href="tel:3126042380">3126042380</a></span>
								<span class="block"><strong><i class="fa fa-fax"></i> {{trans('contacto.fax')}}:</strong> <a href="tel:3126042380">3126042380</a></span>
								<span class="block"><strong><i class="fa fa-envelope"></i> {{trans('contacto.correoE')}}:</strong> <a href="mailto:info@ilernus.com">fetsjo@gmail.com</a></span>
							</p>

						</div>
						<!-- /INFO -->

					</div>

				</div>
			</section>
			<!-- / -->

<script type="text/javascript">
function showfield(name){
  if(name=='otros')
  	document.getElementById('div1').innerHTML='<label for="otroCargo">Indique</label><input type="text" class="form-control pointer" name="otroCargo" />';

  else document.getElementById('div1').innerHTML='';
}

function showfield2(name){
  if(name=='otros')
  	document.getElementById('div2').innerHTML='<label for="otroSector">Indique</label><input type="text" class="form-control pointer" name="otroSector" />';

  else document.getElementById('div2').innerHTML='';
}
</script>

@endsection					