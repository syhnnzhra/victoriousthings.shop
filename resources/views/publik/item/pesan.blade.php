{{-- @extends('publik/layout/layout')

    @section('title', 'Second Things - Buy Now!')

    @section('container')
    <section class="fh5co-books">
	<div class="site-container zw   ">
        <h2 class="universal-h2 universal-h2-bckg mt-5 " style='font-size: 35px ;color: #c18f59;'>Pesan</h2>
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="books-brand-button " style="text-align : left">
                <a href="/item_publik" class="brand-button"><i class="fa fa-arrow-left"> Kembali</i></a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                            <img src="{{ asset('gambar/'.$item->foto) }}" width="240px" hight="300px" alt="">
                            </div>
                            <div class="col-sm-8 mt-5">
                                <h3>{{ $item->nama}}</h3>
                                <table class="table" name="cart">
                                    <tbody>
                                        <tr>
                                            <td>Harga</td>
                                            <td> : </td>
                                            <td>Rp {{number_format($item->harga)}} </td>
                                        </tr>
                                        <tr>
                                            <td>Stok</td>
                                            <td> : </td>
                                            <td>{{$item->stok}} item</td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi</td>
                                            <td> : </td>
                                            <td>{{$item->keterangan}}</td>
                                        </tr>
                                        <form action="" method="post" name="cart">
                                            <tr name="line_items">
                                                <td>Jumlah Pesan</td>
                                                <td> : </td>
                                                <td>
                                                    <div class="row">
                                                    <div class="col-3 tambah">
                                                        <form method="post" action="{{ route('front.cart',$item->id) }}" >
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="text" name="qty" class="form-control-plaintext" required="" id="sst" maxlength="2" min="1" pattern="[0-9]*" readonly value="1" style="border:0;">
                                                    </div>

                                                    <div class="col-sm">
                                                        <input type="hidden" name="id" value="{{ $item->id }}" class="form-control">
                                                        <input type="hidden" name="status" value="Belum Dibayar" class="form-control">
                                                        <input type="hidden" name="order_id" value="0" class="form-control">

                                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                                        class="reduced items-count brand-button" type="button">
                                                        <i class="fa fa-minus"></i>
                                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                                        class="increase items-count brand-button" type="button">
                                                        <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                <tr>
                                                    </tr>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- <tr>
                                            <td>Total</td>
                                            <td> : </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="text" name="total"  value="" script="$('form').jAutoCalc();" jAutoCalc="{qty} * {harga}" class="form-control">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> -->
                                        <tr class="col-4">
                                                <td>Ukuran</td>
                                                <td> : </td>
                                                <td><input type="text" name="pesan" class="form-control" placeholder="Masukan ukuran"></td>
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td> </td>
                                                <td>
                                                
                                                    <div class="books-brand-button mt-2">
                                                    <button type="submit" class="brand-button"><i class="fa fa-shopping-cart"> Add To Cart</i></button>
                                                    </div>
                                                </td>
                                            </form>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	    </div>
    </section>

@endsection
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
@endpush --}}
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

	<title>Second Things - Buy Now!</title>
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
			background-color: #ffffff;
		}
        
	</style>

</head>
<body style="background-color:#ffffff;">
    
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
					<li><a href="/prof">Transaction</a></li>
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
				<div class="bar1" style="background-color: #ffffff;" ></div>
				<div class="bar2" style="background-color: #ffffff;"></div>
				<div class="bar3" style="background-color: #ffffff;"></div>
			</div>
			<script>
				function myFunction(x) {
					x.classList.toggle("change");
				}
			</script>

		</div>
	</nav>

    <section class="containerdetail">
		<div class="about-me-inner site-container">
            <div class="row">
                <article class="detailwrapper">
                    <img src="{{ asset('gambar/'.$item->foto) }}" width="280px" hight="350px"  alt="">
                    </div>
                </article>
                    <div class="textdetail">        
                        <h2 class="universal-h2">{{ $item->nama}}</h2>
                        <p style="margin-bottom: 25px;"></p>
                        <p>{{$item->keterangan}}</p>
                        <p name="cart">Rp {{number_format($item->harga)}} </p>
                        <p>{{$item->stok}} item</p> 
                        <form action="" method="post" name="cart">
                            <?php 
                                $kat = $item->kategori_id;
                                $sweat = $sweater;
                                $aksesoris = $aksesoris;
                                $cardigan = $cardigan;
                                $shirt = $shirt;
                                $sepatu = $sepatu;
                                $bawahan = $bawahan;
                            ?>
                            <!-- <tr>{{$kat}}</tr> -->
                            <tr name="line_items">
                                <div class="row">
                                    <div class="col-sm">
                                        <input type="hidden" name="id" value="{{ $item->id }}" class="form-control">
                                        <input type="hidden" name="status" value="Belum Dibayar" class="form-control">
                                        <input type="hidden" name="order_id" value="0" class="form-control">

                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                        class="reduced items-count button-minplus" type="button">
                                        <i class="fa fa-minus"></i>
                                        
                                        
                                        <form method="post" action="{{ route('front.cart',$item->id) }}" >
                                            @csrf
                                            @method('PUT')
                                            <button class="textcount" disabled="disabled">
                                            <i><input name="qty" required id="sst" maxlength="2" min="1" pattern="[0-9]*" readonly value="1" style="border:0; width:14px;text-align: center; background-color: rgb(243, 243, 243)"></i>
                                        
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                        class="increase items-count button-minplus" type="button">
                                        <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                <tr>
                                    </tr>
                                </div>
                        </tr>   
                        <div class="books-brand-button mt-2">
                            <button type="submit" class="button-black"><i class="fa fa-shopping-cart"> Add To Cart</i></button>
                            </div>
                    </div>
                </form>
                
            </div>
	    </div>
        <div class="bckg"></div>
    </section>

    {{-- footer --}}
    
    {{-- <div class="footerdet"> 
    <img src="{{ asset('assets2/images/icons/line.png')}}" width="50px" hight="25px"/>
        <a href="#">
        <img src="{{ asset('assets2/images/icons/ig-icon.png')}}"  width="25px" hight="25px">
    </a>
    <a href="#" class="ml-2">
        <img src="{{ asset('assets2/images/icons/tw-icon.png')}}" width="25px" hight="25px">
    </a> 
    <img src="{{ asset('assets2/images/icons/line.png')}}" width="50px" hight="25px"/>
    </div> --}}

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