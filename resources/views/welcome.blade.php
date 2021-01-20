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

	<title>@yield('title')</title>
	<!-- link online -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
    

	<!-- end link -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

</head>
<body style="background-color:#E3DED8;">
    
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
					<li><a href="/login">All Product</a></li>
					<li><a href="/kategori_publik">Category</a></li>
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
						<img src="{{asset('gambar/banner-1.png')}}" alt="Gambar - 1" width="100" height="75">
						<div class="carousel-caption">
							<h3>Slide 1</h3>
							<p>Deskripsi Slide 1</p>
							<button>Button</button>
						</div>
					</div>
					<div class="carousel-item">
						<img src="{{asset('gambar/banner-2.png')}}" alt="Gambar - 2" width="100" height="75">
					</div>
				</div>
				
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
	
	<!-- Books and CD -->

	<section class="fh5co-books">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg mt-5" style="color:#c18f59">Popular Items</h2>
			<div class="books">
			@foreach ($item as $items)
			<div class="col-lg-3 col-md- col-sm-12">
                    <div class="single-book">
						<img src="{{ asset('gambar/'.$items->foto) }}" alt="single book and cd" height="300px" >
					</a>
                    <h4 class="single-book__title">{{$items->nama}}</h4>
					<span class="single-book__price">
                        Rp {{number_format($items->harga)}}
                    </span>
					<!-- star button -->
					<div class="books-brand-button mt-3">
						<a href="{{url('/cart',$items->id)}}" class="brand-button">Pesan</a>
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
					<a href="#" target="_blank"><img src="{{asset('assets2/images/social-pinterest.png')}}" alt="social icon"></a>
					<a href="#" target="_blank"><img src="{{asset('assets2/images/social-youtube.png')}}" alt="social icon"></a>
					<a href="#" target="_blank"><img src="{{asset('assets2/images/social-twitter.png')}}" alt="social icon"></a>
				</div>
				<h5>Share it!</h5>
			</div>
		</div>
	</section>
	<!-- end footer -->

	<!-- Scripts -->
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