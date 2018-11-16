@extends('layouts.master')
@section('content')
	<!-- Start Breadcrumbs -->
{{-- 	<section id="breadcrumbs">
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
	</section> --}}
	<!--/ End Breadcrumbs -->
	
	<section id="portfolio" class="section archive page">
		<div class="container">
			<div class="row">
				@foreach($portofolios as $portofolio)
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="portfolio-single">
						<a href="{{config('app.url') . '/storage/' . $portofolio->thumbnail }}" class="zoom">
							<div class="portfolio-head">
								<img src="{{ config('app.url') . '/storage/' . $portofolio->image }}" alt=""/>
								<i class="fas fa-search"></i>
							</div>
						</a>
						<div class="text">
							<h4><a href="/portofolio/{{ $portofolio->id }}">{{ $portofolio->title }}</a></h4>
							<p>{{ $portofolio->text }}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
<!-- 			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<ul class="pagination">
						<li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
					</ul>
				</div>
			</div> -->
		</div>
	</section>
@endsection