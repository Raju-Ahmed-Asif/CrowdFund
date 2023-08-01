<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 text-left fh5co-link">
						<a href="#">FAQ</a>
						<a href="#">Forum</a>
						<a href="#">Contact</a>
					</div>
					<div class="col-md-6 col-sm-6 text-right fh5co-social">
						<a href="#" class="grow"><i class="icon-facebook2"></i></a>
						<a href="#" class="grow"><i class="icon-twitter2"></i></a>
						<a href="#" class="grow"><i class="icon-instagram2"></i></a>
					</div>
				</div>
			</div>
		</div>
        <header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html">Charity</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="#" class="fh5co-sub-ddown"> Crisis</a>
								<ul class="fh5co-sub-menu">
								@foreach($cris as $item)
									<li><a href="#">{{$item->name}}</a></li>
								@endforeach
								</ul>
							</li>
							<li>
								<a href="#" class="fh5co-sub-ddown">Projects</a>
								 <ul class="fh5co-sub-menu">
								 	<li><a href="#">Water World</a></li>
								 	<li><a href="#">Cloth Giving</a></li>
								 	<li><a href="#">Medical Mission</a></li>
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							<li><a href="{{route('volunteer.login')}}">Login</a></li>
							<li><a href="{{route('registration')}}">Sign Up</a></li>
							<li><a href="#">Home</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>