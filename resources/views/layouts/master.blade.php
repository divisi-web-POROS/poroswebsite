<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <!-- Meta tag -->
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="welcome to codeglim">
		<meta name='copyright' content='codeglim'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">	
   		<meta name="csrf-token" content="{{ csrf_token() }}">
		
		<!-- Title Tag -->
        <title> @yield('title') </title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">	
		
        <!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900" rel="stylesheet"> 

		<!-- Google Map Api -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>	
	
		<!-- Font Awesome CSS -->
        {{-- <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/brands.min.css') }}"> --}}

		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">

		<!-- Slicknav CSS -->
        <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">

		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
		
		<!-- Magnific Popup CSS -->
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		
		<!-- Bizpro Style CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/default.css') }}">	
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">	
		
		<!-- You Can Use 8 Different color Just remove bottom of the comment tag -->
		
		<link rel="stylesheet" href="{{ asset('css/skin/green.css') }}">
		{{-- <link rel="stylesheet" href="{{ asset('css/skin/pink.css') }}"> --}}
		{{-- <link rel="stylesheet" href="{{ asset('css/skin/yellow.css') }}"> --}}
		{{-- <link rel="stylesheet" href="{{ asset('css/skin/red.css') }}"> --}}
		{{-- <link rel="stylesheet" href="{{ asset('css/skin/pink.css') }}"> --}}
		{{-- <link rel="stylesheet" href="{{ asset('css/skin/orange.css') }}"> --}}
		{{-- <link rel="stylesheet" href="{{ asset('css/skin/blaze.css') }}"> --}}
		{{-- <link rel="stylesheet" href="{{ asset('css/skin/blue.css') }}"> --}}
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="#" id="colors">
    </head>
    <body>
	
		<!-- Preloader -->
{{-- 		<div class="loader">
			<div class="l-inner">
				<div class="k-spinner">
					<div class="k-bubble-1"></div>
					<div class="k-bubble-2"></div>
				</div>
			</div>
        </div> --}}
		<!--/ End Preloader -->
		
		<!-- Mp Color -->
{{-- 		<div class="mp-color">
			<div class="icon inOut"><i class="fa fa-cog fa-spin"></i></div>
			<h4>Choose Color</h4>
			<span class="color1"></span>
			<span class="color2"></span>
			<span class="color3"></span>
			<span class="color4"></span>
			<span class="color5"></span>
			<span class="color6"></span>
			<span class="color7"></span>
			<span class="color8"></span>
		</div> --}}
		<!--/ ENd Mp Color -->
		
		<!-- Start Header -->
		@include('layouts.nav')
		<!--/ End Header -->

		<!-- Start Content -->
		@yield('content')
		<!-- End Content -->

		<footer id="footer" class="wow fadeIn">			
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="text">
								{{-- <p>Have Idea For This Website ? Just "Fork" and "Pull Request" on <a href="{{ App\UI::where('field', 'project_link')->first()->value }}" target="_blank"><span class="fab fa-github"></span>GitHub</a></p> --}}
								<p>{{ App\UI::where('field', 'footer_text')->first()->value }}<a href="{{ App\UI::where('field', 'project_link')->first()->value }}" target="_blank"><span class="fab fa-github"></span>GitHub</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- Jquery JS -->
		<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
		
		<!-- Colors JS -->
		<script type="text/javascript" src="{{ asset('js/colors.js') }}"></script>
		
		<!-- Google Map JS -->
		<script  type="text/javascript" src="{{ asset('js/gmap.js') }}"></script>
		
		<!-- Modernizr JS -->
		<script type="text/javascript"  src="{{ asset('js/modernizr.min.js') }}"></script>
	
		<!-- Appear JS-->
		<script  type="text/javascript" src="{{ asset('js/jquery.appear.js') }}"></script>

		<!-- Animate JS -->
    	<script  type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
		
		<!-- Onepage Nav JS -->
    	<script  type="text/javascript" src="{{ asset('js/jquery.nav.js') }}"></script>
		
		<!-- Yt Player -->
		<script  type="text/javascript" src="{{ asset('js/ytplayer.min.js') }}"></script>
	
		<!-- Popup JS -->
		<script type="text/javascript"  src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

		<!-- Typed JS -->
		<script  type="text/javascript" src="{{ asset('js/typed.min.js') }}"></script>
		
		<!-- Scroll Up JS -->
		<script  type="text/javascript" src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
		
		<!-- Slick Nav JS -->
		<script  type="text/javascript" src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
		
		<!-- Counterup JS -->
		<script  type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
		<script  type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>
		
		<!-- Owl Carousel JS -->
		<script  type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
		
		<!-- Bootstrap JS -->
		<script  type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
		
		<!-- Main JS -->
		<script type="text/javascript"  src="{{ asset('js/main.js') }}"></script>
    </body>
</html>