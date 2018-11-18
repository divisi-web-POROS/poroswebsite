<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-12 col-xs-12">
				<!-- Logo -->
				<div class="logo">
					<a href="/"><span class="icon"></span> POROS</a>
				</div>
				<!--/ End Logo -->
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="nav-area">
					<!-- Main Menu -->
					<nav class="mainmenu">
						<div class="mobile-nav"></div>
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav menu">
								<li class="active"><a href="#j-slider">Beranda</a></li>
								{{-- <li><a href="#why-choose">Why Choose</a></li> --}}
								{{-- <li><a href="#about-us">About Us</a></li> --}}
								{{-- <li><a href="#service">Department</a></li> --}}
								<li><a href="#team">Pengurus Harian</a></li>
								{{-- <li><a href="#our-skill">Our Skill</a></li> --}}
								{{-- <li><a href="#portfolio">Portfolio</a></li>		 --}}
								<li><a href="#blog">Blog</a></li>		
								{{-- <li><a href="#location">Contact</a></li>		 --}}
							</ul>
						</div>
					</nav>
					<!--/ End Main Menu -->
				</div>
			</div>
			<div class="col-md-2">
				<!-- Social -->
				<ul class="social">
					<li><a href="{{ App\UI::where('field', 'instagram_link')->first()->value }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
					<li><a  class="line-it-button" data-lang="en" data-type="friend" data-lineid="yst3638j"  href="{{ App\UI::where('field', 'line_link')->first()->value }}" target="_blank"><i class="fab fa-line"></i></a></li>
					<li><a href="{{ App\UI::where('field', 'youtube_link')->first()->value }}" target="_blank"><i class="fab fa-youtube"></i></a></li>

				</ul>
				<!--/ End Social -->
			</div>
		</div>
	</div>
</header>