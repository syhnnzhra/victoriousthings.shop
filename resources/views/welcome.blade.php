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
    

	<!-- end link -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

</head>
<body>
    
	<!-- Navigation -->
	<nav class="site-navigation">
		<div class="site-navigation-inner site-container">
            @auth
            @else
            <a href="{{ route('login') }}">
            <i class='fas fa-user-circle mt-2 mr-3' style='font-size:25px ;color: #c18f59;'></i></a>
            @if (Route::has('login'))
            @endauth
            @endif
			<a href="">
			<i class='fas fa-shopping-cart mt-2 mr-4' style='font-size:25px ;color: #c18f59;'></i></a>
			<div class="demo-2 search mr-auto">
				<form>
					<span class="icon"><i class="fa fa-search" style='font-size:25px ;color: #c18f59;'></i></span>
					<input type="search" id="search" placeholder=" Search..."/>
				</form>
			</div>
			<div class="main-navigation">
				<ul class="main-navigation__ul">
					<li><a href="/">Home</a></li>
					<li><a href="item_publik">All Product</a></li>
					<li><a href="#">My Profile</a></li>
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

	<!-- Navigation end -->
    <section class="fh5co-blog">
		<div class="site-container mt-5">
			<h2 class="universal-h2 universal-h2-bckg mt-5">Welcome</h2>
			<div class="blog-slider blog-inner">
				<div class="single-blog">
					<div class="about-me-slider">
						<div >
							<img src="{{asset('assets/images/blog-item-01.png')}}" height="250px" width="500px" >
						</div>
			</div>
		</div>
	</section>
	<!-- Books and CD -->
	<section class="fh5co-books">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg mt-5">Latest Update</h2>
			<div class="books">
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="{{asset('assets/images/09076fdb830cdc5a2940743255786e84.jpg')}}" alt="single book and cd" height="300px">
						<div class="single-book_download">
							<img src="{{asset('assets2/images/download.svg')}}" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">SweatShirts Rajut Cream</h4>
					<span class="single-book__price">Rp.400000</span>
					<!-- star button -->
					<div class="books-brand-button mt-3">
						<a href="#" class="brand-button">Pesan</a>
					</div>
					<!-- star button end -->
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="{{asset('assets/images/27c777790c081384f7751822c26906da.jpg')}}" alt="single book and cd" height="300px">
						<div class="single-book_download">
							<img src="{{asset('assets2/images/download.svg')}}" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Knit Baby Blue</h4>
					<span class="single-book__price">Rp.299000</span>
					<!-- star button -->
					<div class="books-brand-button mt-3">
						<a href="#" class="brand-button">Pesan</a>
					</div>
					<!-- star button end -->
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="{{asset('assets/images/a25278eaf9d71e1e2ef4bb2a58ae8218.jpg')}}" alt="single book and cd" height="300px">
						<div class="single-book_download">
							<img src="{{asset('assets2/images/download.svg')}}" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">SweatShirts Light Blue Milk</h4>
					<span class="single-book__price">Rp.269600</span>
					<!-- star button -->
					<div class="books-brand-button mt-3">
						<a href="#" class="brand-button">Pesan</a>
					</div>
					<!-- star button end -->
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="{{asset('assets/images/b59188389855c6d087ccfe12e45d03a8.jpg')}}" alt="single book and cd" height="300px">
						<div class="single-book_download">
							<img src="{{asset('assets2/images/download.svg')}}" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">SweatShirts Cream</h4>
					<span class="single-book__price">Rp.350000</span>
					<!-- star button -->
					<div class="books-brand-button mt-3">
						<a href="#" class="brand-button">Pesan</a>
					</div>
					<!-- star button end -->
				</div>
			</div>
	</section>
	<!-- Books and CD end -->
	
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

</body>
</html>