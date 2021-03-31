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
  <link rel="icon" type="image/png" href="{{ asset('assets2/images/icons/logo1.png')}}"/>

	<title>Second Things - Your Order</title>
	<!-- link online -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


  <!-- Bootstrap core CSS -->
  <link href="{{asset('assets2/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


	<!-- end link -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<style>
		.body{
			background-color: #fffaf4;
		}
        
	</style>

</head>
<body style="background-color:#fffaf4">
    
	<!-- Navigation -->
	<nav class="site-navigation">
		<div class="site-navigation-inner site-container">
            @guest
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}">
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
                @else
                    <a id="" class='textsite fas fa-user-circle mt-1 mr-2'  href="/prof" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
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
					<li><a href="/trans">Transaction</a></li>
					<li><a href="/prof">Profile</a></li>
					<!-- <li><a href="/dashboard">My Profile</a></li> -->
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
				<div class="bar1" ></div>
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
  <!-- Content -->
  <section class="fh5co-books">
		<div class="site-container">
        <div class="card" style="border: 0; text-align:center;">
          <div class="card-body" style="background-color: #fffaf4;">
            <div class="mt-2">
              <h5  style="color:#c18f59;"> Order Saya ({{$sums}})</h5>
                <div class="mt-4">
                  @forelse ($odetail as $det)
                  <h5> {{$det->first_name}} <a href="{{ route('transaction.show', $det->order_id) }}"><span class="badge badge-warning">Show</span></a> 
                    <a href="{{url('trackOrder')}}/{{$det->order_id}}" class="btn"><i class="fa fa-map-marker"></i> Track Order</a></h5>
                  @empty 
                  <p> Anda Belum Melakukan Transaksi</p>
                  @endforelse
                </div>
              </div>
            </div>
        </div>
			</div>
  </section>

  <!-- Script-->
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="{{asset('assets2/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets2/js/slick.min.js')}}"></script>
	<script src="{{asset('assets2/js/main.js')}}"></script>

    @push('addon-script')
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <script>
        $('form').jAutoCalc();
            $('form').jAutoCalc({
                attribute: 'jAutoCalc',
                thousandOpts: [',', '.', ' '],
                decimalOpts: ['.', ','],
                decimalPlaces: -1,
                initFire: true,
                chainFire: true,
                keyEventsFire: false,
                readOnlyResults: true,
                showParseError: true,
                emptyAsZero: false,
                smartIntegers: false,
                onShowResult: null,
                funcs: {},
                vars: {}
            });
    </script>
@endpush
</body>
</html>