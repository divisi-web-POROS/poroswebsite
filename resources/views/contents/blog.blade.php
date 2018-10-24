@extends('layouts.master')
@section('content')
	<!-- Start Breadcrumbs -->
	<section id="breadcrumbs">
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
	</section>
	<!--/ End Breadcrumbs -->
	
	<!-- Start blog -->
	<section id="blog" class="single section page">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12 col-xs-12">
					<!-- Single blog -->
					<div class="single-blog">
						<div class="blog-head">
							<img src="images/blog/blog-single.jpg" alt="#">
						</div>
						<div class="blog-content">
							<h2><a href="blog-single.html">Best Marketing ways of 2017</a></h2>
							<div class="meta">
								<span><i class="fa fa-user"></i>admin</span>
								<span><i class="fa fa-calender"></i>19 May</span>
								<span><i class="fa fa-comments"></i>5 Comments</span>
							</div>
							<p>Lorem ipsum dolor sit amet, mel ut mazim fuisset. Eu vel epicurei percipit, lobortis dignissim efficiendi te sit. Cu munere singulis instructior per, ne qui purto eius congue. Ut graece detracto duo, an usu quis mazim. Ea vero nobis graeci mel, dolore facilis concludaturque eu sea, perpetua assentior eu vim.</p>
							<p><b>Cu munere singulis instructior per, ne qui purto eius congue</b></p>
							<p>Lorem ipsum dolor sit amet, mel ut mazim fuisset. Eu vel epicurei percipit, lobortis dignissim efficiendi te sit. Cu munere singulis instructior per, ne qui purto eius congue. Ut graece detracto duo, an usu quis mazim. Ea vero nobis graeci mel, dolore facilis concludaturque eu sea, perpetua assentior eu vim.</p>
							<p>Lorem ipsum dolor sit amet, mel ut mazim fuisset. Eu vel epicurei percipit, lobortis dignissim efficiendi te sit. Cu munere singulis instructior per, ne qui purto eius congue. Ut graece detracto duo, an usu quis mazim. Ea vero nobis graeci mel, dolore facilis concludaturque eu sea, perpetua assentior eu vim.</p>
							<p>Lorem ipsum dolor sit amet, mel ut mazim fuisset. Eu vel epicurei percipit, lobortis dignissim efficiendi te sit. Cu munere singulis instructior per, ne qui purto eius congue. Ut graece detracto duo, an usu quis mazim. Ea vero nobis graeci mel, dolore facilis concludaturque eu sea, perpetua assentior eu vim.</p>
						</div>
					</div>
					<!--/ End Single blog -->
					<!-- Comments -->
					<div class="blog-comments">
						<h2>Latest Comments</h2>
							<div class="comments-body">
								<!-- Single Comments -->
								<div class="single-comments">
									<div class="main">
										<div class="head">
											<img src="images/comments1.jpg" alt="#"/>
											<h4>Loren Mu</h4>
										</div>
										<div class="body">
											<p class="meta">March 06,2017</p>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
											<a href="#">replay</a>
										</div>
									</div>
								</div>		
								<!-- Single Comments -->
								<div class="single-comments">
									<div class="main">
										<div class="head">
											<img src="images/comments2.jpg" alt="#"/>
											<h4>Taren Hon</h4>
										</div>
										<div class="body">
											<p class="meta">March 06,2017</p>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
											<a href="#">replay</a>
										</div>
									</div>
								</div>		
							</div>
						</div>
					<!--/ End Comments -->
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<!-- Blog Sidebar -->
					<div class="blog-sidebar">
						<!-- Start Search Form -->
						<div class="single-sidebar form">
							<form class="search" action="#">
								<input type="text" placeholder="Type To Search">
								<div class="s-button">
									<input type="submit" value="search">
								</div>
							</form>
						</div>
						<!--/ End Search Form -->
						<!-- Single Sidebar -->
						<div class="single-sidebar category">
							<h2>Categories</h2>
							<ul>
								<li><a href="#"><i class="fa fa-angle-double-right"></i>Discover<span>200</span></a></li>			
								<li><a href="#"><i class="fa fa-angle-double-right"></i>World<span>155</span></a></li>			
								<li><a href="#"><i class="fa fa-angle-double-right"></i>Marketplace<span>544</span></a></li>			
							</ul>
						</div>
						<!--/ End Single Sidebar -->
						<!-- Single Sidebar -->
						<div class="single-sidebar latest">
							<h2>Popular Post</h2>
							<!-- Single Post -->
							<div class="single-post">
								<div class="post-info">
									<h4><a href="#">Welcome to world technology</a></h4>
									<p>March 05, 2017</p>
								</div>
							</div>
							<!-- End Single Post -->
							<!-- Single Post -->
							<div class="single-post">
								<div class="post-info">
									<h4><a href="#">Best website template 2017</a></h4>
									<p>March 05, 2017</p>
								</div>
							</div>
							<!-- End Single Post -->
							<!-- Single Post -->
							<div class="single-post">
								<div class="post-info">
									<h4><a href="#">Top 10 Marketing Resource </a></h4>
									<p>March 05, 2017</p>
								</div>
							</div>
							<!-- End Single Post -->
							
							<!-- Single Post -->
							<div class="single-post">
								<div class="post-info">
									<h4><a href="#">Lorem ipsum dolor imian</a></h4>
									<p>March 05, 2017</p>
								</div>
							</div>
							<!-- End Single Post -->
						</div>
						<!--/ End Single Sidebar -->
						
						<!-- Single Sidebar -->
						<div class="single-sidebar tags">
							<h2>Popular <span>Tags</span></h2>
							<ul>
								<li><a href="#">Wonder</a></li>			
								<li><a href="#">Hot</a></li>			
								<li><a href="#">Spice</a></li>			
								<li><a href="#">Good</a></li>			
								<li><a href="#">Amazing</a></li>			
							</ul>
						</div>
						<!--/ End Single Sidebar -->
					</div>
					<!--/ End Blog Sidebar -->
				</div>
			</div>
		</div>
		<div class="gmap">
			<div class="map"></div>
		</div>
	</section>
	<!-- End blog -->
@endsection