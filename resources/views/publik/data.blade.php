<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{ asset('assets2/images/icons/favicon.ico')}}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/main.css')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
					<span class="login100-form-title">
						Profile
					</span>
                    <form method="post" class="login100-form validate-form" action="{{route('dashboard.update', Auth::user()->id)}}">
                    @method('PUT')
                    @csrf
                        <div class="wrap-input100 validate-input">
                            <select class="input100" required name="jeniskelamin" id="">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                            </select>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" required type="date" name="tanggal_lahir" value="" required placeholder="Tanggal Lahir">
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" required type="text" name="alamat" value="" required placeholder="Alamat">
                        </div>
                        <div class="wrap-input100 validate-input">
                            <select class="input100" required name="city_id" id="">
                                <option value="">Pilih Kota</option>
                                @foreach($city as $c)
                                <option value="{{$c->city_id}}">{{$c->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <select class="input100" required name="province_id" id="">
                                <option value="">Pilih Provinsi</option>
                                @foreach($prov as $p)
                                <option value="{{$p->province_id}}">{{$p->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="kode_pos" value="" placeholder="Kode Pos" required>
                        </div>
                        <div class="container-login100-form-btn ">
                            <button class="login100-form-btn" type="submit">
                                Send
                            </button>
                        </div>
                        </div>
                    </form>
			</div>
		</div>
	</div>
	
	<script src="{{ asset('assets2/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('assets2/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('assets2/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('assets2/vendor/select2/select2.min.js')}}"></script>
	<script src="{{ asset('assets2/vendor/tilt/tilt.jquery.min.js')}}"></script>
    <script>
        function myFunction(){
            var x =
            document.getElementById("myInput");
            if(x.type ==="password"){
                x.type = "text";
            }else{
                x.type = "text";
            }
        }
    </script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="{{ asset('assets2/js/main.js')}}"></script>
