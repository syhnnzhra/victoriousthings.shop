<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="{{asset('assets2/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets2/css/slick.css')}}">
	<link href="{{asset('assets2/css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{asset('assets2/js/jequery.js')}}" rel="stylesheet">

	<title>Second Things</title>
	<!-- link online -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- end link -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body style="background-color:rgb(255, 255, 255)">
    
	<!-- Navigation -->
	<nav class="site-navigation">
		<div class="site-navigation-inner site-container">
            <!-- @auth
            @else
            <a href="{{ route('login') }}">
            <i class='fas fa-user-circle mt-2 mr-3' style='font-size:25px ;color: #c18f59;'></i></a>
            @if (Route::has('login'))
            @endauth
            @endif -->
			<!-- <a href="">
				<i class='fas fa-shopping-cart mt-2 mr-4' style='font-size:25px ;color: #c18f59;'></i>
			</a> -->
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
				<img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-top">
					Logo
				</a>
			</div>
			<div class="demo-2 search mr-auto">
				<!-- <form>
					<span class="icon"><i class="fa fa-search" style='font-size:25px ;color: #c18f59;'></i></span>
					<input type="search" id="search" placeholder=" Search..."/>
				</form> -->
			</div>
			<div class="main-navigation">
				<ul class="main-navigation__ul">
					<li><a href="/">Home</a></li>
					<li><a href="/items">All Product</a></li>
					<li><a href="/login">Category</a></li>
					<li><a href="/login">Profile</a></li>
					<li>
						@auth
						@else
						<a href="{{ route('login') }}"> Login
						<!-- <i class='fas fa-user-circle mt-2 mr-3' style='font-size:25px ;color: #c18f59;'></i> -->
						</a>
						@if (Route::has('login'))
						@endauth
						@endif
					</li>
				</ul>
			</div>
			<div id="myBtn" class="burger-container" onclick="myFunction(this)">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
			<script>
				function myFunction(x) {
					x.classList.toggle("change");
				}
			</script>

		</div>
	</nav>
	<div id="demo" class="carousel slide" data-ride="carousel" style="">

				<!-- Indicators -->
				{{-- <ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
				</ul> --}}
				
				<!-- The slideshow -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<!-- Top banner -->
					<section class="fh5co-top-banner">
						<div class="top-banner__inner site-container">
							<div class="top-banner__image">
								<img src="{{asset('assets2/images/bg3.jpg')}}" alt="author image">
							</div>
							<div class="top-banner__text">
								<div class="top-banner__text-up">
									<span class="brand-span">For You</span>
									<h2 class="top-banner__h2">Diskon</h2>
								</div>
								<div class="top-banner__text-down">
									<h2 class="top-banner__h2">60%</h2>
									<span class="brand-span">Author, Writer, Traveler</span>
								</div>
								<p>One Man. One Mission. Can He Go Beyond?One Man. One Mission. Can He Go Beyond?</p>
								<a href="#" class="brand-button">Read bio > </a>
							</div>
						</div>
					</section>
			<!-- banner-2 -->
					</div>
					<div class="carousel-item">
						<section class="fh5co-top-banner">
							<div class="top-banner__inner site-container">
								<div class="top-banner__image">
									<img src="{{asset('assets2/images/bg1.jpg')}}" alt="author image">
								</div>
								<div class="top-banner__text">
									<div class="top-banner__text-up">
										<span class="brand-span">Hello!</span>
										<h2 class="top-banner__h2">New</h2>
									</div>
									<div class="top-banner__text-down">
										<h2 class="top-banner__h2">Collection</h2>
										<span class="brand-span">Author, Writer, Traveler</span>
									</div>
									<p>One Man. One Mission. Can He Go Beyond?One Man. One Mission. Can He Go Beyond?</p>
									<a href="#" class="brand-button">Read bio > </a>
								</div>
							</div>
						</section>
					</div>
				</div>
				<!-- Top banner end -->
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
				</a>
			</div>
			</div>
		</section>
		

	<!-- Navigation end -->

	<section class="fh5co-about-me">
		<div class="about-me-inner site-container">
			<article class="portfolio-wrapper">
				<div class="portfolio__img">
					<img src="{{ asset( 'assets2/images/photo.jpg' )}}" class="about-me__profile" alt="about me profile picture">
				</div>
				<div class="portfolio__bottom">
					<div class="portfolio__name">
						<span>S</span>
						<h2 class="universal-h2">andy Bag</h2>
					</div>
				</div>
			</article>
			<div class="about-me__text">
					<h2 class="universal-h2 universal-h2-bckg mt-5">Check This Out</h2>
					<p><span>H</span> e has work appearing or forthcoming in over a dozen venues, including Buzzy Mag, The Spirit of Poe, and the British Fantasy Society journal Dark Horizons. He is also CEO of a company, specializing in custom book publishing and social media marketing services, have created a community for authors to learn and connect.He has work appearing or forthcoming in over a dozen venues, including Buzzy Mag, The Spirit of Poe, and have created a community for authors to learn and connect.</p>
					<div class="books-brand-button mt-3">
						<a href="#" class="brand-button" style="color:#ffff">Check</a>
					</div>
			</div>
			</div>
		</div>
		<div class="about-me-bckg"></div>
	</section>
	<!-- About me end -->
	
	<!-- Books and CD -->

	<section class="fh5co-books">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg mt-5" style="color:#c18f59">Popular Items</h2>
			<div class="books">
			@foreach ($item as $items)
			<div class="col-lg-3 col-md- col-sm-12">
                    <div class="single-book">
						<img src="{{ asset('gambar/'.$items->foto) }}" alt="single book and cd" height="300px" width="235px">
					</a>
                    <h4 class="single-book__title">{{$items->nama}}</h4>
					<span class="single-book__price">
                        Rp {{number_format($items->harga)}}
                    </span>
					<!-- star button -->
					<div class="books-brand-button mt-3">
						<a href="/login" class="brand-button">Pesan</a>
                    </div>
                </div>
            </div>
			@endforeach
			</div>
	</section>
	<!-- Books and CD end -->
	
	<!-- Diskon -->
	{{-- <section class="fh5co-books">
		<div class="site-container text-center">
			<img src="{{asset('gambar/diskon.jpg')}}" alt="">
		</div>
	</section> --}}


	<!-- Footer -->
	<section class="fh5co-social">
		<div class="site-container">
			<div class="social">
				<h5>Follow me!!</h5>
				<div class="social-icons">
					<a href="#" target="_blank"><img src="{{asset('assets2/images/social-twitter.png')}}" alt="social icon"></a>
					<a href="#" target="_blank"><img src="{{asset('assets2/images/social-instagram.png')}}" alt="social icon"></a>
					<a href="#" target="_blank"><img src="{{asset('assets2/images/social-whatsapp.png')}}" alt="social icon"></a>
				</div>
				<h5>Share it!</h5>
			</div>
		</div>
	</section>
	<!-- end footer -->

	<!-- Scripts -->
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="{{asset('assets2/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets2/js/slick.min.js')}}"></script>
	<script src="{{asset('assets2/js/main.js')}}"></script>
	<script>
		$(window).scroll(function(){
		$('nav').toggleClass('scrolled', $(this).scrollTop()> 500);
		});
	</script>

</body>
</html>