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
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<!-- Bootstrap core CSS -->
	<link href="{{asset ('assets2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	

	<!-- end link -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

	<style>
		.body{
			background-color: rgb(255, 255, 255);
		}
	</style>

</head>
<body style="background-color:rgb(255, 255, 255)">
    
	<!-- Navigation -->
	<nav class="navigation">
		<div class="site-navigation-inner site-container">
            @guest
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}">
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
                @else
                    <a id="" class='textsite fas fa-user-circle mt-1 mr-2'  href="/prof" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                    </a>
                @endguest
			<a href="">
				<a href="/cartp" class="icons">
					<i class="textsite fas fa-shopping-cart mt-2" ></i>
					<a class="iconsum" style="color:#c18f59"><b> {{$sum}} </b> </a>
				</a>
			<div class="demo-2 search mr-auto ml-3">
				
			</div>
			<div class="main-navigation">
				<ul class="main-navigation__ul">
					<li><a href="/homepublik">Home</a></li>
					<li><a href="/item_publik">All Product</a></li>
					<li><a href="/kategori_publik">Category</a></li>
					<li><a href="/prof">Transaction</a></li>
					<li><a href="/prof">My Profile</a></li>
					<li><a href="/sell">Sell</a></li>
					<li><a href="{{ route('logout') }}"
						onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
								@csrf
							</form></a></li>
					
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

	@yield('container')
	
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
	<script src="{{asset('assets2/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets2/js/slick.min.js')}}"></script>
	<script src="{{asset('assets2/js/main.js')}}"></script>
</body>
</html>