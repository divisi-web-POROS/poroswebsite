@extends('layouts.master')
@section('title', App\UI::where('field', 'web_title')->first()->value)
@section('content')

<section id="j-slider">
	<div class="slide-main">
		<div class="single-slider" style="background-image:url('{{config('app.url') . '/storage/' . App\UI::where('field', 'section1_image_1')->first()->path }}');" >
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="slide-text left">
							<div class="slider-inner">
								<h1>{!!App\UI::where('field', 'section1_header_1')->first()->value!!}</h1>
								<p>{!!App\UI::where('field', 'section1_text_1')->first()->value!!}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="single-slider" style="background-image:url('{{config('app.url') . '/storage/' . App\UI::where('field', 'section1_image_1')->first()->path }}');" >
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="slide-text left">
							<div class="slider-inner">
								<h1>{!!App\UI::where('field', 'section1_header_2')->first()->value!!}</h1>
								<p>{!!App\UI::where('field', 'section1_text_2')->first()->value!!}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

{{-- <section id="why-choose" class="section">
	<div class="why-image">
		<div class="video"><a href="https://www.youtube.com/watch?v=wZWiRoktNWA" class="video-play mfp-iframe wow zoomIn"><i class="fa fa-play"></i></a></div>
		<!-- <img src="images/video.png" alt=""> -->
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12 pull-right">
				<h2>{{ App\UI::where('field', 'section2_title')->first()->value }}</h2>
				<p>{{ App\UI::where('field', 'section2_text')->first()->value }}</p>
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
						<div class="single-choose">
							<i class="fa fa-check"></i>
							<h4>{{ App\UI::where('field', 'section2_text_1')->first()->value }}</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
						<div class="single-choose">
							<i class="fa fa-facebook"></i>
							<h4>{{ App\UI::where('field', 'section2_text_2')->first()->value }}</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s">
						<div class="single-choose">
							<i class="fa fa-youtube"></i>
							<h4>{{ App\UI::where('field', 'section2_text_3')->first()->value }}</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1s">
						<div class="single-choose">
							<i class="fa fa-support"></i>
							<h4>{{ App\UI::where('field', 'section2_text_4')->first()->value }}</h4>
						</div>
					</div>
				</div>
			</div>					
		</div>
	</div>
</section> --}}	

<section id="service" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
				<div class="section-title center">
					<!-- <h2>Our <span>Service</span></h2> -->
					<h2>{{ App\UI::where('field', 'section3_title')->first()->value }}</h2>
					<p>{{ App\UI::where('field', 'section3_text')->first()->value }}</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- Single Service -->
			<div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
				<div class="single-service">
					<i class="fas fa-bullhorn"></i>
					<h2>{{ App\UI::where('field', 'section3_name_1')->first()->value }}</h2>
					<p>{{ App\UI::where('field', 'section3_text_1')->first()->value }}</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn col-md-push-4 col-sm-push-4" data-wow-delay="0.6s">
				<div class="single-service">
					<i class="fas fa-sitemap"></i>
					<h2>{{ App\UI::where('field', 'section3_name_3')->first()->value }}</h2>
					<p>{{ App\UI::where('field', 'section3_text_3')->first()->value }}</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn col-md-pull-4 col-sm-pull-4" data-wow-delay="0.8s">
				<div class="single-service">
					<i class="fas fa-rocket"></i>
					<h2>{{ App\UI::where('field', 'section3_name_2')->first()->value }}</h2>
					{{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> --}}
				</div>
			</div>
	<!-- 					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1s">
					<div class="single-service">
						<i class="fa fa-code"></i>
						<h2>UI/UX Design</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
					</div>
				</div> -->
			</div>
		</div>
	</section>

	<section id="about-us" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
					<div class="section-title center">
						<!-- <h2>About <span>US</span></h2> -->
						<h2>{{ App\UI::where('field', 'section4_title')->first()->value }}</h2>
					</div>
				</div>
			</div>
			<div class="row"> 
				<div class="col-md-5 col-sm-12 col-xs-12 wow slideInLeft">
					<div class="about-main">
						<div class="about-img">
							<img src="{{config('app.url') . '/storage/' . App\UI::where('field', 'section4_image')->first()->path }}" alt=""/>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="1s">
					<div class="tabs-main">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#about" data-toggle="tab">{{ App\UI::where('field', 'section4_tab_1')->first()->value }}</a></li>
							<li role="presentation"><a href="#welcome"  data-toggle="tab">{{ App\UI::where('field', 'section4_tab_2')->first()->value }}</a></li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="about">
								<div class="about">
									<p>{{ App\UI::where('field', 'section4_text')->first()->value }}</p>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade in" id="welcome">
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="single-tab">
											<i class="fas fa-code"></i>
											<h4>{{ App\UI::where('field', 'section4_name_1')->first()->value }}</h4>
											<p>{{ App\UI::where('field', 'section4_text_1')->first()->value }}</p>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="single-tab">
											<i class="fab fa-android"></i>
											<h4>{{ App\UI::where('field', 'section4_name_2')->first()->value }}</h4>
											<p>{{ App\UI::where('field', 'section4_text_2')->first()->value }}</p>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="single-tab">
											<i class="fas fa-pencil-ruler"></i>
											<h4>{{ App\UI::where('field', 'section4_name_3')->first()->value }}</h4>
											<p>{{ App\UI::where('field', 'section4_text_3')->first()->value }}</p>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="single-tab">
											<i class="fab fa-linux"></i>
											<h4>{{ App\UI::where('field', 'section4_name_4')->first()->value }}</h4>
											<p>{{ App\UI::where('field', 'section4_text_4')->first()->value }}</p>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="single-tab">
											<i class="fas fa-unlock-alt"></i>
											<h4>{{ App\UI::where('field', 'section4_name_5')->first()->value }}</h4>
											<p>{{ App\UI::where('field', 'section4_text_5')->first()->value }}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@if(!$officials->isEmpty())
	<section id="team" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
					<div class="section-title center">
						<h2>{{ App\UI::where('field', 'section5_title')->first()->value }}</h2>
						<p>{{ App\UI::where('field', 'section5_text')->first()->value }}</p>
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
					@foreach($officials as $official)
					<div class="single-team">
						<div class="team-info">
							<div class="name">
								<h4>{{ $official->name }}<span>{{ $official->role->display_name }}</span></h4>
							</div>
							<p>{{ $official->text }}</p>
							<ul class="team-social">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-line"></i></a></li>
								<li><a href="#"><i class="fab fa-github"></i></a></li>
								<li><a href="#"><i class="fas fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>	 
	@endif

	@if(!$portofolios->isEmpty())
	<section id="portfolio" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
					<div class="section-title center">
						<h2>{{ App\UI::where('field', 'section6_title')->first()->value }}</h2>
						<p>{{ App\UI::where('field', 'section6_text')->first()->value }}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="portfolio-carousel">
						@foreach($portofolios as $portofolio)
						<div class="portfolio-single">
							<a href="{{config('app.url') . '/storage/' .  $portofolio->thumbnail }}" class="zoom">
								<div class="portfolio-head" style="height: 200px; overflow: hidden;">
									<img src="{{config('app.url') . '/storage/' .  $portofolio->thumbnail }}" alt=""/>
									<i class="fas fa-search"></i>
								</div>
							</a>
							<div class="text" style="height: 150px; overflow: hidden; text-overflow: ellipsis; ">
								<h4><a href="/portofolio/{{ $portofolio->id }}">{{ $portofolio->title }}</a></h4>
								<p>{!! $portofolio->text !!}.</p>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<p class="more-btn-p"><a class="more-btn" href="/portofolio">Lebih banyak</a></p>
				</div>
			</div>
		</div>
	</section>
	@endif

	<!-- 		<section id="statics" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="row">
						<div class="statics">	
							<div class="col-md-12 col-sm-12 col-xs-12">
								<h2>World Domination!</h2>
								<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
								<div class="static-single">
									<div class="number"><span class="counter">1300</span></div>
									<p>Project Complete</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
								<div class="static-single">
									<div class="number"><span class="counter">123300</span></div>
									<p>Support Tiket</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s">
								<div class="static-single">
									<div class="number"><span class="counter">55300</span></div>
									<p>Global Clients</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1s">
								<div class="static-single">
									<div class="number"><span class="counter">40.99</span><span class="percent">%</span></div>
									<p>World Domination</p>
								</div>
							</div>
						</div>
					</div>
				</div>					
			</div>
		</div>
		<div class="static-image wow fadeIn"></div>
	</section> -->	

	@if(!$blogs->isEmpty())
	<section id="blog" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12  wow fadeIn">
					<div class="section-title center">
						<h2>{{ App\UI::where('field', 'section7_title')->first()->value }}</h2>
						<p>{{ App\UI::where('field', 'section7_text')->first()->value }}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="blog">
						@foreach($blogs as $blog)
						<div class="col-md-4 col-sm-6 col-xs-12">
							<!-- Single blog -->
							<div class="single-blog">
								<div class="blog-head" style="height: 200px; overflow: hidden;">
									<img src="{{config('app.url') . '/storage/' .  $blog->image }}" alt="#">
									<a href="/blog/{{ $blog->id }}" class="link"><i class="fas fa-link"></i></a>
								</div>
								<div class="blog-content" style="height: 200px; overflow: hidden; text-overflow: ellipsis;">
									<h2><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></h2>
									<div class="meta">
										<span style="float: left;"><i class="fas fa-user"></i>{{ $blog->user->name }}</span>
										<span style="float: right;"><i class="fas fa-calendar-plus"></i>{{ $blog->created_at->format('d/m/Y') }}</span>
										{{-- <span><i class="fa fa-comments"></i>5 Comments</span> --}}
									</div>
									{!! $blog->text !!}
								</div>
								<a href="/blog/{{ $blog->id }}" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
							</div>	
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<p class="more-btn-p"><a class="more-btn" href="/blog">Lebih banyak</a></p>
				</div>
			</div>
		</div>
	</section>
	@endif

	@if(!$testimonials->isEmpty())
	<section id="testimonial" class="section wow fadeIn">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
					<div class="section-title center">
						<h2>{{ App\UI::where('field', 'section8_title')->first()->value }}</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="testimonial-carousel">	
						@foreach($testimonials as $testimonial)
						<div class="single-testimonial">
							<div class="testimonial-content">
								<p>{{ $testimonial->text }}</p>
							</div>
							<div class="testimonial-info">
{{-- 								<div class="img">
									<span class="arrow"></span>
									<img src="images/testimonial1.jpg" class="img-circle" alt="">
								</div> --}}
								<h6>{{ $testimonial->name }}<span>{{ $testimonial->position}}</span></h6>
							</div>			
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif

	<section id="contact" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
					<div class="section-title center">
						<h2>{{ App\UI::where('field', 'section9_title')->first()->value }}</h2>
						<p>{{ App\UI::where('field', 'section9_text')->first()->value }}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-12">
					<div class="single-address">
						<i class="fas fa-phone"></i>
						<h4>Telepon/ Whatsapp</h4>
						<p>{{ App\UI::where('field', 'poros_phone')->first()->value }}</p>
					</div>
					<div class="single-address active">
						<i class="fas fa-map-marker-alt"></i>
						<h4>Lokasi</h4>
						<p>{{ App\UI::where('field', 'poros_location')->first()->value }}</p>
					</div>
					<div class="single-address">
						<i class="fas fa-envelope-open"></i>
						<h4>Email</h4>
						<p>{{ App\UI::where('field', 'poros_email')->first()->value }}</p>
					</div>
				</div>
			</div>
		</div>
		<div class="gmap">
			<div class="map" id="map"></div>
		</div>
	</section>

{{-- 	<section id="location" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
					<div class="section-title center">
						<h2>Our <span>Location</span></h2>
						<p>Coordinates for abs potioning the closest positioned parent box of the positioned abs qoning the closes for abs potioning the closest positioned parent.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
					<div class="single-address">
						<i class="fa fa-phone"></i>
						<h4>Our Phone</h4>
						<p>+8801812345678, +8801700000123</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
					<div class="single-address active">
						<i class="fa fa-phone"></i>
						<h4>Office Location</h4>
						<p>240, Khilgaon Dhaka 1230.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay="0.8s">
					<div class="single-address">
						<i class="fa fa-phone"></i>
						<h4>Corporate Email</h4>
						<p>info@Bizpro.com, support@Bizpro.com</p>
					</div>
				</div>
			</div>
		</div>
	</section> --}}

{{-- 	<div id="clients" class="section wow fadeIn">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="clients-carousel">
						<!-- Single Clients -->
						<div class="single-client">
							<img src="images/client1.png" alt="" class="img-responsive">
						</div>
						<!--/ Single Clients -->
						<!-- Single Clients -->
						<div class="single-client">
							<img src="images/client2.png" alt="" class="img-responsive">
						</div>
						<!--/ Single Clients -->
						<!-- Single Clients -->
						<div class="single-client">
							<img src="images/client3.png" alt="" class="img-responsive">
						</div>
						<!--/ Single Clients -->
						<!-- Single Clients -->
						<div class="single-client">
							<img src="images/client4.png" alt="" class="img-responsive">
						</div>
						<!--/ Single Clients -->
						<!-- Single Clients -->
						<div class="single-client">
							<img src="images/client5.png" alt="" class="img-responsive">
						</div>
						<!--/ Single Clients -->
						<!-- Single Clients -->
						<div class="single-client">
							<img src="images/client6.png" alt="" class="img-responsive">
						</div>		
						<!--/ Single Clients -->
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	@endsection
	@section('custom-js')
	<script src="http://www.openlayers.org/api/OpenLayers.js"></script>
	<script async defer>
		map = new OpenLayers.Map("map");
		map.addLayer(new OpenLayers.Layer.OSM());

		var lonLat = new OpenLayers.LonLat( 112.614387 ,-7.954677 )
		.transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map.getProjectionObject() // to Spherical Mercator Projection
            );

		var zoom=18;

		var markers = new OpenLayers.Layer.Markers( "Markers" );
		map.addLayer(markers);

		markers.addMarker(new OpenLayers.Marker(lonLat));

		map.setCenter (lonLat, zoom);
	</script>
	@endsection