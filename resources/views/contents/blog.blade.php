@extends('layouts.master')
@section('content')
<!-- Start Breadcrumbs -->
{{-- 	<section id="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Blog Single</h2>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="blog-single.html">Blog Single</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section> --}}
	<!--/ End Breadcrumbs -->
	
	<section id="blog" class="single section page">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12 col-xs-12">
					<!-- Single blog -->
					<div class="single-blog">
						<div class="blog-head">
							<img src="{{ config('app.url') . '/storage/' . $blog->image }}" alt="#">
						</div>
						<div class="blog-content">
							<h2><a href="blog-single.html">{{ $blog->title }}</a></h2>
							<div class="meta">
								<span><i class="fas fa-user"></i>{{ $blog->user->name }}</span>
								<span><i class="fas fa-calendar-plus"></i>{{ $blog->created_at->format('d/m/Y') }}</span>
								{{-- <span><i class="fa fa-comments"></i>5 Comments</span> --}}
							</div>
							{!! $blog->text !!}
						</div>
					</div>
					@if(!$blog->comments->isEmpty())
					<div class="blog-comments">
						<h2>Latest Comments</h2>
						<div class="comments-body">
							@foreach($blog->comments()->orderBy('created_at', 'asc')->get() as $comment)
							<div class="single-comments">
								<div class="main">
									<div class="head">
										{{-- <img src="images/comments1.jpg" alt="#"/> --}}
										<h4>{{ $comment->name }}</h4>
									</div>
									<div class="body">
										<p class="meta">{{ $comment->created_at->format('d/m/Y') }}</p>
										<p>{{ $comment->text }}</p>
										{{-- <a href="#">replay</a> --}}
									</div>
								</div>
							</div>
							@endforeach		
						</div>
					</div>
					@endif
					<div class="blog-comments">
						<h2>Komentar</h2>
						<form class="form" method="post" action="/blog/{{ $blog->id }}/comment">
							{{ csrf_field() }}
							<div class="form-group">
								<input type="text" name="name" placeholder="Nama" required>
							</div>
							<div class="form-group">
								<input type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<textarea name="text" rows="1" placeholder="Komentar"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="button primary"><i class="fas fa-comment"></i>Kirim</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="blog-sidebar">
						<div class="single-sidebar form">
							<form class="search" action="#">
								<input type="text" placeholder="Type To Search">
								<div class="s-button">
									<input type="submit" value="search">
								</div>
							</form>
						</div>
{{-- 						<div class="single-sidebar category">
							<h2>Categories</h2>
							<ul>
								<li><a href="#"><i class="fa fa-angle-double-right"></i>Discover<span>200</span></a></li>			
								<li><a href="#"><i class="fa fa-angle-double-right"></i>World<span>155</span></a></li>			
								<li><a href="#"><i class="fa fa-angle-double-right"></i>Marketplace<span>544</span></a></li>			
							</ul>
						</div> --}}
						<div class="single-sidebar latest">
							<h2>Popular Post</h2>
							@foreach($blogs as $blog)
							<div class="single-post">
								<div class="post-info">
									<h4><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></h4>
									<p>{{ $blog->created_at->format('d/m/Y') }}</p>
								</div>
							</div>
							@endforeach
						</div>
						<div class="single-sidebar tags">
							<h2>Popular <span>Tags</span></h2>
							<ul>
								@foreach($tags as $tag)
								<li><a href="#">{{ $tag->name }}</a></li>			
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection