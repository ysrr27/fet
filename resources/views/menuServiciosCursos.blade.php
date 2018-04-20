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

												<a href="#slider">
													Inicio
												</a>

											@elseif((Route::current()->getName() == 'curso') || (Route::current()->getName() == 'blog'))

												<a href="{{ route('home') }}">
													Ilernus
												</a>

											@endif

										</li>
										<li><!--  -->

											@if(Route::current()->getName() == 'home')

												<a href="#conocenos">
													Conócenos
												</a>

											@elseif((Route::current()->getName() == 'curso') || (Route::current()->getName() == 'blog'))

												<a href="http://localhost:8000#conocenos">
													Conócenos
												</a>

											@endif

										</li>
										<li><!--  -->

											@if(Route::current()->getName() == 'home')

												<a  href="#servicios">
													Servicios
												</a>

											@elseif((Route::current()->getName() == 'curso') || (Route::current()->getName() == 'blog'))

												<a href="http://localhost:8000#servicios">
													Servicios
												</a>

											@endif

											<!-- class="dropdown-toggle" -->
											<ul class="dropdown-menu dropdown-toggle" style="font-size: 14px">
												@foreach ($tiposCursos as $tipo) 
													<li class="dropdown">
														
														<a class="dropdown-toggle" href="#">
															{{ $tipo->str_categoria }}
														</a>
														<ul class="dropdown-menu">

				                                        	@if($tipo->str_categoria == 'Negocios') 
				                                        	
																@foreach ($cursosNegocios as $negocio) 
																	<li>
																		<a href="{{ route('curso',$negocio->str_curso) }}" >

																			{!! str_replace("-"," ",$negocio->str_titulocorto) !!}

																		</a>
																	</li>
																@endforeach				                                        		
				                                        		
				                                        	@elseif($tipo->str_categoria == 'Desarrollo')

																@foreach ($cursosDesarrollo as $desarrollo) 
																	<li>
																		<a href="{{ route('curso',$desarrollo->str_curso) }}" >

																			{!! str_replace("-"," ",$desarrollo->str_titulocorto) !!}

																		</a>
																	</li>
																@endforeach					                                        	

				                                        	@elseif($tipo->str_categoria == 'Productividad')

																@foreach ($cursosProductividad as $productividad) 
																	<li>
																		<a href="{{ route('curso',$productividad->str_curso) }}" >

																			{!! str_replace("-"," ",$productividad->str_titulocorto) !!}

																		</a>
																	</li>
																@endforeach					                                        	

				                                        	@elseif($tipo->str_categoria == 'Tecnología') 

																@foreach ($cursosTecnologia as $tecnologia) 
																	<li>
																		<a href="{{ route('curso',$tecnologia->str_curso) }}" >

																			{!! str_replace("-"," ",$tecnologia->str_titulocorto) !!}

																		</a>
																	</li>
																@endforeach					                                        		
				                                        		
				                                        	@endif 

														</ul>
														
													</li>
												@endforeach
																																															
											</ul>
																						
										</li>
										<li><!--  -->
											<a href="{{ route('blog')}}">
												Blog
											</a>
										</li>
										<li><!--  -->

											@if(Route::current()->getName() == 'home')

												<a class="" href="#contacto">
													Contáctanos
												</a>

											@elseif((Route::current()->getName() == 'curso') || (Route::current()->getName() == 'blog'))

												<a href="http://localhost:8000#contacto">
													Contáctanos
												</a>

											@endif

										</li>																				


									</ul>						 

							</nav>

						</div>
