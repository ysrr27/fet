<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>
			Cursos e-learning, presenciales y virtualización de contenido| iLernus
		</title>
		<meta name="keywords" content="Formación,formacion,Academia,Academias,Virtualización,virtualizacion,Aprendizaje,On line,E-learning,Capacitación,capacitacion, Soluciones,Colaboradores,Organizaciones,Instructores,Instructor,Educación,educacion,Audiovisual,Empresas,Empresa,Producción,produccion,Contenidos,contenido,Metodologías,metodología,Metodologias,metodologia,University" />

		<meta name="description" content="La mejor solución que ofrece la más alta calidad en contenidos y metodología instruccional e-learning, soluciones de gestión de aprendizaje en línea y virtualización de contenidos especializados en una plataforma." />

		<meta name="Author" content="Neil Barazarte [www.neilbarazarte.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<!--
		-->

		@if (Route::current()->getName() == 'blogPost')

			<meta property="og:url"                content="http://ilernus.com/<?=Request::path()?>" />
			<meta property="og:type"               content="article" />
			<meta property="og:title"              content="<?=str_replace("-"," ",$post->str_titulo)?>" />
			<meta property="og:description"        content="<?=str_replace("-"," ",$post->str_titulo)?>"" />
			<meta property="og:image"              content="http://ilernus.com/smarty/assets/images/LOGOS-ILERNUS-COMPARTIR.png" />	
			<meta name="author" 					content="<?=$post->autor?>">
			<meta property="og:locale" 				content="en_EN"/>
			<meta property="og:site_name" 			content="ilernus.com"/>

			<meta name="twitter:title" 				content="<?=str_replace("-"," ",$post->str_titulo)?>"/>
			<meta name="twitter:description" 		content="<?=str_replace("-"," ",$post->str_titulo)?>"/>
			<meta name="twitter:image" 				content="http://ilernus.com/smarty/assets/images/LOGOS-ILERNUS-COMPARTIR.png"/>
			<meta name="twitter:card" 				content="photo"/>
			<meta name="twitter:url" 				content="http://ilernus.com/<?=Request::path()?>"/>

		@endif

		{!! Html::style('smarty/assets/css/css.min.css') !!}

		<!-- CORE CSS -->
		{!! Html::style('smarty/assets/plugins/bootstrap/css/bootstrap.min.css') !!}

		<!-- LAYER SLIDER -->
		{!! Html::style('smarty/assets/plugins/slider.layerslider/css/layerslider.min.css') !!}

		<!-- THEME CSS -->
		{!! Html::style('smarty/assets/css/essentials.min.css') !!}
		{!! Html::style('smarty/assets/css/layout.min.css') !!}
		{!! Html::style('smarty/assets/css/customilernus.min.css') !!}

		<!-- PAGE LEVEL SCRIPTS -->
		{!! Html::style('smarty/assets/css/header-1.min.css') !!}
		{!! Html::style('smarty/assets/css/color_scheme/blue.min.css') !!}



		<link rel="icon" href="{{ asset('smarty/assets/images/emblemafavicon.ico') }}" type="image/x-icon"/>
		<link rel="shortcut icon" href="{{ asset('smarty/assets/images/emblemafavicon.ico') }}" type="image/x-icon"/>



	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

		<!-- wrapper -->
		<div id="wrapper">

			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<!-- <div id="header" class="sticky transparent clearfix"> -->
			<div id="header" class="sticky  clearfix header-sm"> <!-- shadow-after-3 -->

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- Logo -->
						<a class="logo pull-left" href="{{ route('home') }}">
							<img class="img-responsive" src="{{ asset('smarty/assets/images/LOGOS-ILERNUS-FINAL-2017-01.png') }}" alt="logo ilernus" title="www.ilernus.com" />														
						</a>


						<div class="sticky-side sticky-side-left visible-md visible-lg">
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
							<a href="https://www.linkedin.com/company-beta/9189376/" target="_blank" class="social-icon social-icon-sm social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
								<i class="fa fa-linkedin"></i>
								<i class="fa fa-linkedin"></i>
							</a>
						</div>				

						

					</div>

				</header>
				<!-- /Top Nav -->

			</div>

  					@yield('content')


			<div class="callout alert alert-default noborder noradius nomargin">

	<div class="text-center">

		<h3> <i class="fa fa-phone-square" aria-hidden="true"></i> ¡Llámanos al  <strong>0800-iLernus</strong>! (453 76 87)</h3>
		<p class="font-lato size-20">
			Estamos para brindarte la mejor atención y asesoría
		</p>
				
	</div>

</div>

			<!-- FOOTER -->
				@include('footer')
			<!-- /FOOTER -->


		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-97823639-1', 'auto');
		  ga('send', 'pageview');

		</script>

		@if( (Route::current()->getName() == 'blogPost') || (Route::current()->getName() == 'blog') ) 

			<!-- JAVASCRIPT FILES -->
			<script type="text/javascript">
			
				var plugin_path = '../smarty/assets/plugins/';

			</script>

		@else

			<!-- JAVASCRIPT FILES -->
			<script type="text/javascript">
			
				var plugin_path = 'smarty/assets/plugins/';

			</script>

		@endif
		
		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'smarty/assets/plugins/';</script>
		{!! Html::script('smarty/assets/plugins/jquery/jquery-2.1.4.min.js') !!}
		{!! Html::script('smarty/assets/js/scripts.min.js') !!}
		<!-- STYLESWITCHER - REMOVE -->

		<!-- LAYER SLIDER -->
		{!! Html::script('smarty/assets/plugins/slider.layerslider/js/layerslider_pack.min.js') !!}
		{!! Html::script('smarty/assets/js/view/demo.layerslider_slider.min.js') !!}

		<!-- PAGELEVEL SCRIPTS -->
		<!--<script type="text/javascript" src="smarty/assets/js/contact.js"></script>-->


	</body>
</html>