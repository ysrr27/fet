@extends('app')

@section('content')

@foreach( $posts as $post)

@endforeach



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
			<section class="page-header dark page-header-xs">
				<div class="container">

					<h1>BLOG</h1>


				</div>
			</section>
			<!-- /PAGE HEADER -->






			<!-- -->
			<section>
				<div class="container">

					<div class="row">

						<!-- LEFT -->
						<div class="col-md-9 col-sm-9">

							<h1 class="blog-post-title">{{ str_replace("-"," ",$post->str_titulo) }}</h1>
							<ul class="blog-post-info list-inline">
								<li>
									<a href="#">
										<i class="fa fa-clock-o"></i> 
										<span class="font-lato">
											
												<?php

											  		$post->fecha = substr($post->fecha, 0,10);

											        $var = explode('-',$post->fecha);


											        $post->fecha = "$var[2]-$var[1]-$var[0]";

												?>

												{!! $post->fecha !!} 

										</span>
									</a>
								</li>

								<li>
									<i class="fa fa-tags" aria-hidden="true"></i>

									@foreach($categorias as $categoria)

										@if($categoria->lng_idpost == $post->id)
									
											<a class="category" href="#">
												<span class="font-lato">{{ $categoria->str_categoria }}</span>
											</a>

										@endif

									@endforeach



								</li>
								<li>
									<a href="#">
										<i class="fa fa-user"></i> 
										<span class="font-lato">{{ $post->autor }}</span>
									</a>
								</li>
							</ul>

									@if($post->str_audio)

										<div class="margin-bottom-20">
											
											{!! html_entity_decode($post->str_audio) !!} 

										</div>									

									@endif

									@if($post->str_tipo == 'video')

										<div class="margin-bottom-20">
											<div class="embed-responsive embed-responsive-16by9">
												{!! html_entity_decode($post->str_video) !!}
											</div>
										</div>									

									@endif

									@if ($post->str_tipo == 'imagen')
									
										<figure class="margin-bottom-20">
											<img class="img-responsive" src="data:image/jpeg;base64,{{ $post->blb_img1 }}" alt="" title="" >
										</figure>						

									@endif								

									@if($post->str_tipo == 'carrusel-imagen')

										

										<!-- OWL SLIDER -->
										<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 1, "autoPlay": 3000, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>										

											@if(!empty($post->blb_img1))

												<div>
													<img class="img-responsive" src="data:image/jpeg;base64,{{ $post->blb_img1 }}" alt="" title="" >
												</div>

											@endif	

											@if(!empty($post->blb_img2))

												<div>
													<img class="img-responsive" src="data:image/jpeg;base64,{{ $post->blb_img2 }}" alt="" title="" >
												</div>

											@endif		

											@if($post->blb_img3)
											
												<div>
													<img class="img-responsive" src="data:image/jpeg;base64,{{ $post->blb_img3 }}" alt="" title="" >
												</div>
											
											@endif

										</div>
										<!-- /OWL SLIDER -->

									@endif

							<!-- IMAGE -->
							<!--
							<figure class="margin-bottom-20">
								<img class="img-responsive" src="assets/images/demo/content_slider/10-min.jpg" alt="img" />
							</figure>
							-->
							<!-- /IMAGE -->

							<!-- VIDEO -->
							<!--
							<div class="margin-bottom-20 embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="http://player.vimeo.com/video/8408210" width="800" height="450"></iframe>
							</div>
							-->
							<!-- /VIDEO -->


							<!-- article content -->
							{!! html_entity_decode($post->str_post) !!} 
							
							<!-- /article content -->


							<div class="divider divider-dotted"><!-- divider --></div>


							<!-- TAGS -->
								@foreach($totalCategorias as $categoria)
								<a class="tag" href="#">
									<span class="txt">{{ $categoria->str_categoria }}</span>
									<span class="num">{{ $categoria->total }}</span>
								</a>
								@endforeach
							<!-- /TAGS -->

							<!-- SHARE POST -->
							<div class="clearfix margin-top-30">


							<span class="pull-left margin-top-4 bold hidden-xs">
								Compartir Post: 
							</span>
																	
							<style type="text/css">

								.share-entry {	margin: 0 0 0 0;overflow: hidden;padding: 10px 0px 0px 0px;}

								.share-entry ul {float: left;}

								.share-entry ul, .share-entry li {display: inline;list-style-type: none;}

								.share-entry a,.share-entry iframe {border: none;display: block;float: left;overflow: hidden;width: 105px;height: 21px;}

							</style>

							<div class="share-entry"> 
								<ul>

									<li>
						  				<a class="twitter-share-button" href="https://twitter.com/intent/tweet" data-size="large" data-text="iLernus" data-lang="es"> Tweet </a>
						  			</li>

						  			<li>
						  				&nbsp;
						  			</li>

						  			<li>
						  				<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large" data-mobile-iframe="true">
											<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">
												Compartir
											</a>
										</div>
						  			</li>

						  			<li>
						  				&nbsp;
						  			</li>

						  			<li>
						  				<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: es_ES</script>
										<script type="IN/Share"></script>
						  			</li>

						 		</ul> 
							</div>

							</div>
							<!-- /SHARE POST -->

							<div class="divider"><!-- divider --></div>
							
							<div class="fb-comments" data-href="http://ilernus.com/{{Request::path()}}" data-numposts="5" width="800"></div>

						</div>

						<!-- RIGHT -->
						<div class="col-md-3 col-sm-3">

							<!-- INLINE SEARCH -->
							<div class="inline-search clearfix margin-bottom-30">
								<form action="#" method="get" class="widget_search">
									<!--<input type="search" placeholder="Start Searching..." id="s" name="s" class="serch-input">
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>-->
								</form>
							</div>
							<!-- /INLINE SEARCH -->


							<!-- JUSTIFIED TAB -->
							<div class="tabs nomargin-top hidden-xs margin-bottom-60">

								<!-- tabs -->
								<ul class="nav nav-tabs nav-bottom-border nav-justified">
									<li class="active">
										<a href="#tab_1" data-toggle="tab">
											Post Recientes
										</a>
									</li>

								</ul>

								<!-- tabs content -->
								<div class="tab-content margin-bottom-60 margin-top-30">

									<!-- POPULAR -->
									<div id="tab_1" class="tab-pane active">



									@foreach($posts_recientes as $recientes)
										<div class="row tab-post"><!-- post -->
											<div class="col-md-3 col-sm-3 col-xs-3">
												<a href="{{ route('blogPost', $recientes->str_titulo) }}">

													@if($recientes->str_tipo == 'simple')
														
														<i class="fa fa-newspaper-o" aria-hidden="true" style="font-size: 18px"></i>

													@endif

													@if($recientes->str_tipo == 'imagen' || $recientes->str_tipo == 'carrusel-imagen' )
													
														<img src="data:image/jpeg;base64,{{ $recientes->blb_img1 }}" alt="" width="50" >

													@endif

													@if($recientes->str_tipo == 'video' )
													
														<div class="margin-bottom-20">
															<div class="embed-responsive embed-responsive-16by9">
																{!! html_entity_decode($recientes->str_video) !!}
															</div>
														</div>
														
													@endif													

													@if($recientes->str_tipo == 'audio' )
													
														<i class="fa fa-soundcloud" aria-hidden="true" style="font-size: 18px"></i>

													@endif

												</a>
											</div>
											<div class="col-md-9 col-sm-9 col-xs-9">
												<a href="{{ route('blogPost', $recientes->str_titulo) }}" class="tab-post-link">
													{{ str_replace("-"," ",$recientes->str_titulo) }}
												</a>
												<small>




												<?php

											  		$recientes->fecha = substr($recientes->fecha, 0,10);

											        $var = explode('-',$recientes->fecha);


											        $recientes->fecha = "$var[2]-$var[1]-$var[0]";

												?>

												{{ $recientes->fecha }}






												</small>
											</div>
										</div><!-- /post -->
									@endforeach

									</div>
									<!-- /POPULAR -->



								</div>

							</div>
							<!-- JUSTIFIED TAB -->


							


							<!-- TWIITER WIDGET -->
							<h3 class="hidden-xs size-16 margin-bottom-10">TWITTER</h3>							
							<ul class="hidden-xs widget-twitter margin-bottom-60" data-php="{{ asset('smarty/php/twitter/tweet.php') }}" data-username="ilernus" data-limit="3">
								<li></li>
							</ul>


							<!-- FACEBOOK -->
							<iframe class="hidden-xs" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Filernus&amp;width=263&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:263px; height:258px;"></iframe>




						</div>

					</div>


				</div>
			</section>
			<!-- / -->


<!-- Comentarios de facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>


@endsection	