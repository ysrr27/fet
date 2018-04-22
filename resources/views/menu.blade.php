						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse">
							<nav class="nav-main">

								<!-- 
									.nav-onepage
									Required for onepage navigation links
									
									Add .external for an external link!
								-->

									<ul id="topMain" class="nav nav-pills nav-main nav-onepage" style="font-size: 14px">

										<li class=""><!-- HOME -->

											@if(Route::current()->getName() == 'home')

												<a href="#">
													{{trans('menu.inicio')}}
												</a>

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') || (Route::current()->getName() == 'blog') || (Route::current()->getName() == 'terminos') || (Route::current()->getName() == 'politicas') || (Route::current()->getName() == 'faq') || (Route::current()->getName() == 'mapa') || (Route::current()->getName() == 'trabaja') || (Route::current()->getName() == 'blogPost'))

												@if( $_SERVER['SERVER_NAME'] == 'localhost' )

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#">
														{{trans('menu.inicio')}}
													</a>

												@else

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}#">
														{{trans('menu.inicio')}}
													</a>

												@endif

											@endif

										</li>
								



										<li class="dropdown"><!--  -->

											@if(Route::current()->getName() == 'home')

												<a class="dropdown-toggle" href="#conocenos">
													{{trans('menu.conocenos')}}
												</a>

												<ul class="dropdown-menu">
													<li class="dropdown">
														<a class="" href="#directores">
															{{trans('menu.equipoDirectivo')}}
														</a>
													</li>
													<li class="dropdown">
														<a class="" href="#gerentes">
															{{trans('menu.equipoGerencial')}}
														</a>
													</li>	
													<li class="dropdown">
														<a class="" href="#objetivos">
															{{trans('menu.objetivos')}}
														</a>
													</li>												
												</ul>											

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') || (Route::current()->getName() == 'blog') || (Route::current()->getName() == 'terminos') || (Route::current()->getName() == 'politicas') || (Route::current()->getName() == 'faq') || (Route::current()->getName() == 'mapa') || (Route::current()->getName() == 'trabaja') || (Route::current()->getName() == 'blogPost'))


												@if( $_SERVER['SERVER_NAME'] == 'localhost' )

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#conocenos">
														{{trans('menu.conocenos')}}
													</a>
													<ul class="dropdown-menu">
														<li class="dropdown">
															<a class="" href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#directores">
																{{trans('menu.equipoDirectivo')}}
															</a>
														</li>
														<li class="dropdown">
															<a class="" href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#gerentes">
																{{trans('menu.equipoGerencial')}}
															</a>
														</li>												
													</ul>													

												@else

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#conocenos">
														{{trans('menu.conocenos')}}
													</a>
													<ul class="dropdown-menu">
														<li class="dropdown">
															<a class="" href="http://{{ $_SERVER['SERVER_NAME'] }}#directores">
																{{trans('menu.equipoDirectivo')}}
															</a>
														</li>
														<li class="dropdown">
															<a class="" href="http://{{ $_SERVER['SERVER_NAME'] }}#gerentes">
																{{trans('menu.equipoGerencial')}}
															</a>
														</li>												
													</ul>													

												@endif

											@endif

										</li>
										<li class=""><!-- HOME -->

											@if(Route::current()->getName() == 'home')

												<a href="#ilernus">
													{{trans('menu.ilernus')}}
												</a>

											@elseif((Route::current()->getName() == 'instructores') || (Route::current()->getName() == 'contactanos') || (Route::current()->getName() == 'blog') || (Route::current()->getName() == 'terminos') || (Route::current()->getName() == 'politicas') || (Route::current()->getName() == 'faq') || (Route::current()->getName() == 'mapa') || (Route::current()->getName() == 'trabaja') || (Route::current()->getName() == 'blogPost'))

												@if( $_SERVER['SERVER_NAME'] == 'localhost' )

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}:8000#ilernus">
														{{trans('menu.ilernus')}}
													</a>

												@else

													<a href="http://{{ $_SERVER['SERVER_NAME'] }}#ilernus">
														{{trans('menu.ilernus')}}
													</a>

												@endif

											@endif

										</li>

										<li>
											<a href="{{ route('contactanos')}}">
												{{trans('menu.contacto')}}
											</a>
										</li>
										<li>
											<a href="{{ route('blog')}}">
												{{trans('menu.blog')}}
											</a>
										</li>

									</ul>						 

							</nav>

						</div>
