@extends('layouts.master')
@section('content')
	<!-- Start Breadcrumbs -->
{{-- 	<section id="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Arsip Blog</h2>
					<ul>
						<li><a href="/">Home</a></li>
						<li class="active"><a href="/blog">Blog Archive</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section> --}}
	<!--/ End Breadcrumbs -->
	
	<section id="blog" class="archive section page">
		<div class="container">
			<div class="row">
				@foreach($blogs as $blog)
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="single-blog">
						<div class="blog-head">
							<img src="{{ config('app.url') . '/storage/' . $blog->image }}" alt="#">
							<a href="/blog/{{ $blog->id }}" class="link"><i class="fa fa-link"></i></a>
						</div>
						<div class="blog-content">
							<h2><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></h2>
							<div class="meta">
								<span style="float: left;"><i class="fas fa-user"></i>{{ $blog->user->name }}</span>
								<span style="float: right;"><i class="fas fa-calendar-plus"></i>{{ $blog->created_at->format('d/m/Y') }}</span>
								{{-- <span><i class="fa fa-comments"></i>5 Comments</span> --}}
							</div>
							{{-- <p style="">{!! $blog->text !!}</p> --}}
							<a href="/blog/{{ $blog->id }}" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="row">
				<div class="col-md-12">
					{{-- {{ $blogs->links() }} --}}
					<ul class="pagination">
						<li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
@endsection