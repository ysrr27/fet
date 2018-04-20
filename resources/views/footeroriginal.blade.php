<footer id="footer" >
				<div class="container" >

					<div class="row" style="text-align: center;">
						
						<div class="col-md-5th">
							<!-- Footer Logo -->
							
							<img src="{{ asset('smarty/assets/images/ilernus4_mini2.png') }}" alt="logo iLernus" title="www.ilernus.com" />	
							<!-- Small Description -->
							<p>&copy; 2017 iLernus. Todos los derechos reservados.</p>

						</div>

						<div class="col-md-5th">

							<!-- Links -->
							<h4 class="letter-spacing-1">LABORAL</h4>
							<ul class="footer-links list-unstyled">
								<li><a href="#">Trabaja con nosotros</a></li>
							</ul>
							<!-- /Links -->

						</div>

						<div class="col-md-5th">

							<!-- Links -->
							<h4 class="letter-spacing-1">SOPORTE</h4>
							<ul class="footer-links list-unstyled">
								<li><a href="{{ route('faq')}}">Preguntas Frecuentes</a></li>
								<li><a href="{{ route('mapa')}}">Mapa del Sitio</a></li>
							</ul>
							<!-- /Links -->

						</div>

						<div class="col-md-5th">
								<a href="https://www.facebook.com/ilernus/" target="_blank" class="social-icon social-icon-sm social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
									<i class="fa fa-facebook"></i>
									<i class="fa fa-facebook"></i>
								</a>

								<a href="https://twitter.com/ilernus" target="_blank" class="social-icon social-icon-sm social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="fa fa-twitter"></i>
									<i class="fa fa-twitter"></i>
								</a>

								<a href="https://www.instagram.com/ilernus/" target="_blank" class="social-icon social-icon-sm social-instagram" style="background-color: #bc2a8d" data-toggle="tooltip" data-placement="top" title="Instagram">
									<i class="fa fa-instagram" aria-hidden="true"></i>
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>

								<a href="https://www.linkedin.com/company/ilernus" target="_blank" class="social-icon social-icon-sm social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="fa fa-linkedin"></i>
									<i class="fa fa-linkedin"></i>
								</a>

						</div>

						<div class="col-md-5th">
							
							<a href="http://www.monitorbg.com" target="_blank">
							<img src="{{ asset('smarty/assets/images/bg2.png') }}" alt="logo bg" title="www.monitorbg.com"/>	

							<!-- Small Description -->
							<p>Desarrollado por: B&G Technologies S.A. J-405498633</p>							
							</a>
						</div>


					</div>

				</div>

				<div class="copyright">
					<div class="container">
						<ul class="pull-right nomargin list-inline mobile-block">
							<li><a href="{{ route('terminos') }}">Términos del Servicio</a></li>
							<li>&bull;</li>
							<li><a href="{{ route('politicas')}}">Políticas de Privacidad</a></li>
						</ul>
						El nombre y logo de iLernus son marcas registradas.
					</div>
				</div>
			</footer>