@extends('layouts.master')
@section('content')
	<!-- Start Breadcrumbs -->
	<section id="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Portfolio Archive</h2>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="portfolio.html">Portfolio Archive</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Breadcrumbs -->
	
	<!-- Start Project -->
	<section id="portfolio" class="section archive page">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<!-- Single Portfolio -->
					<div class="portfolio-single">
						<a href="images/portfolio/6.jpg" class="zoom">
							<div class="portfolio-head">
								<img src="images/portfolio/6.jpg" alt=""/>
								<i class="fa fa-search"></i>
							</div>
						</a>
						<div class="text">
							<h4><a href="portfolio-single.html">Portfolio 6</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum.</p>
						</div>
					</div>
					<!--/ End Portfolio -->
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<!-- Single Portfolio -->
					<div class="portfolio-single">
						<a href="images/portfolio/2.jpg" class="zoom">
							<div class="portfolio-head">
								<img src="images/portfolio/2.jpg" alt=""/>
								<i class="fa fa-search"></i>
							</div>
						</a>
						<div class="text">
							<h4><a href="portfolio-single.html">Portfolio 2</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum.</p>
						</div>
					</div>
					<!--/ End Portfolio -->
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<!-- Single Portfolio -->
					<div class="portfolio-single">
						<a href="images/portfolio/3.jpg" class="zoom">
							<div class="portfolio-head">
								<img src="images/portfolio/3.jpg" alt=""/>
								<i class="fa fa-search"></i>
							</div>
						</a>
						<div class="text">
							<h4><a href="portfolio-single.html">Portfolio 3</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum.</p>
						</div>
					</div>
					<!--/ End Portfolio -->
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<!-- Single Portfolio -->
					<div class="portfolio-single">
						<a href="images/portfolio/4.jpg" class="zoom">
							<div class="portfolio-head">
								<img src="images/portfolio/4.jpg" alt=""/>
								<i class="fa fa-search"></i>
							</div>
						</a>
						<div class="text">
							<h4><a href="portfolio-single.html">Portfolio 4</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum.</p>
						</div>
					</div>
					<!--/ End Portfolio -->
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<!-- Single Portfolio -->
					<div class="portfolio-single">
						<a href="images/portfolio/5.jpg" class="zoom">
							<div class="portfolio-head">
								<img src="images/portfolio/5.jpg" alt=""/>
								<i class="fa fa-search"></i>
							</div>
						</a>
						<div class="text">
							<h4><a href="portfolio-single.html">Portfolio 5</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum.</p>
						</div>
					</div>
					<!--/ End Portfolio -->
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<!-- Single Portfolio -->
					<div class="portfolio-single">
						<a href="images/portfolio/6.jpg" class="zoom">
							<div class="portfolio-head">
								<img src="images/portfolio/6.jpg" alt=""/>
								<i class="fa fa-search"></i>
							</div>
						</a>
						<div class="text">
							<h4><a href="portfolio-single.html">Portfolio 6</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum.</p>
						</div>
					</div>
					<!--/ End Portfolio -->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- Start Pagination -->
					<ul class="pagination">
						<li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
					</ul>
					<!--/ End Pagination -->
				</div>
			</div>
		</div>
		<div class="gmap">
			<div class="map"></div>
		</div>
	</section>
	<!--/ End Project -->
@endsection