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

	<title>Second Things - Items</title>
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
            
			<a href="">
				<a href="/cartp" class="icons">
					<!-- <i class="fas fa-shopping-cart mt-2" style='font-size:25px ;color: #c18f59;'></i> -->
				    <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-top">
				</a>
			<div class="demo-2 search mr-auto ml-3">
				
			</div>
			<div class="main-navigation">
				<ul class="main-navigation__ul">
					<li><a href="/">Home</a></li>
					<li><a href="/items">All Product</a></li>
					<li><a href="/login">Category</a></li>
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

	<!-- Navigation end -->

       <!-- Container -->
       <section class="fh5co-books">
           <div class="site-container">
               <h2 class="universal-h2 universal-h2-bckg mt-5" style='font-size: 35px ; color: #c18f59;'>All Items</h2>
               
               <!-- <div class="row"> -->
               <!-- <div class="">
                    <div class="input-group icons demo-2 mb-5">
                    <div class="demo-2 search mr-auto ml-3">
                        <form action="searchpublikitem" method="get">
                            {{csrf_field()}}
                            <span class="icon"><i class="fa fa-search" style='font-size:25px ;color: #c18f59;'></i></span>
                            <input type="search" name="searchp" id="search" placeholder=" Search here!"/>
                        </form>
                    </div>
                    </div>
                   </div> -->
       
      
                   <div class="books">
                       @foreach ($items as $item)
                       <div class="col-lg-3 col-md- col-sm-12">
                       <div class="single-book">
                           <a href="/login" class="single-book__img" >
						<img src="{{ asset('gambar/'.$item->foto) }}" alt="single book and cd" height="300px">
						<div class="single-book_download">
							<span style="font-size:14px; color:#c18f59" alt="book image">{{$item->keterangan}} <p>Klik for Detail</p></span>
						</div>
					</a>
                    <h4 class="single-book__title">{{$item->nama}}</h4>
					<span class="single-book__price">
                        Rp {{number_format($item->harga)}}
                    </span>
					<!-- star button -->
					<div class="books-brand-button mt-3 mb-5">
						<a href="/login" class="brand-button">Pesan</a>
                    </div>
                </div>
            </div>
                @endforeach
                     </div>
                </div>
		    </div>
        </section>
	<!-- Container end -->

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