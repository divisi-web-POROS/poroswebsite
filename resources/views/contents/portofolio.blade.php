@extends('layouts.master')
@section('content')
	<!-- Start Breadcrumbs -->
	<section id="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Portfolio Single</h2>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="portfolio-single.html">Portfolio Single</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Breadcrumbs -->
	
	<!-- Start Portfolio -->
	<section id="portfolio" class="single section page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8 col-sm-12 col-xs-12">
							<div class="portfolio-single-slide">
								<div class="portfolio-single">
									<div class="portfolio-head">
										<img src="images/portfolio/single-portfolio.jpg" alt=""/>
									</div>
								</div>
								<div class="portfolio-single">
									<div class="portfolio-head">
										<img src="images/portfolio/single-portfolio.jpg" alt=""/>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="features">
								<h2>Work Features</h2>
								<ul class="list">
									<li><i class="fa fa-angle-double-right"></i>Clients: Design Food</li>
									<li><i class="fa fa-angle-double-right"></i>Category: HTML Website</li>
									<li><i class="fa fa-angle-double-right"></i>Rating:
										<ul>
											<li> <span><i class="fa fa-star"></i></span></li>
											<li> <span><i class="fa fa-star"></i></span></li>
											<li> <span><i class="fa fa-star"></i></span></li>
											<li> <span><i class="fa fa-star"></i></span></li>
											<li> <span><i class="fa fa-star"></i></span></li>
										</ul>
									</li>
									<li><i class="fa fa-angle-double-right"></i>Skills: HTML5, CSS3, Jquery, Javascript</li>
									<li><i class="fa fa-angle-double-right"></i>Order Date: 05 May 2017</li>
									<li><i class="fa fa-angle-double-right"></i>Complete Date: 10 May 2017</li>
								</ul>
							</div>
							<div class="website">
								<a href="#" class="button primary"><i class="fa fa-send"></i>Visit Website</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="portfolio-des">
								<h2>Portfolio Title Here</h2>							
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It have roots in a piece of classical Latin literature from 45 BC, making it over 200 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virgii, looked up one of the more obscure Latin words, consectetur, from a pass- age, and going through the cites of classical literature.</p>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It have roots in a piece of classical Latin literature from 45 BC, making it over 200 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virgii, looked up one of the more obscure Latin words, consectetur, from a pass- age, and going through the cites of classical literature.</p>
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It have roots in a piece of classical Latin literature from 45 BC, making it over 200 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virgii, looked up one of the more obscure Latin words, consectetur, from a pass- age, and going through the cites of classical literature.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="gmap">
			<div class="map"></div>
		</div>
	</section>
	<!--/ End Portfolio -->	
@endsection