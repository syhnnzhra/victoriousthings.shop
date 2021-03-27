<!DOCTYPE html>
<html>
<head>
	<title>Second Things - Profile</title>
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
                                <option value="">Select Gender</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <!-- <label for="" style="font-color:white;">Birth Date</label> -->
                            <input class="input100" required type="date" name="tanggal_lahir" value="" required>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" required type="text" name="alamat" value="" required placeholder="Adddress">
                        </div>
                        <div class="wrap-input100 validate-input">
                            <select class="input100" required name="province_id" id="province">
                                <option value="">Pilih Provinsi</option>
                                @foreach ($prov as $p)
                                    <option value="{{$p->province_id}}">{{$p->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <select class="input100" required name="city_id" id="destination">
                                <option value="">Pilih Kota</option>
                                @foreach ($city as $p)
                                    <option value="{{$p->city_id}}">{{$p->type}} {{$p->title}}</option>
                                @endforeach
                            <select>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" name="kode_pos" value="" placeholder="Postal Code" required>
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
    <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function ()
        {
            jQuery('#province').on('change',function(){
                var provinceID = jQuery(this).val();
                if(provinceID)
                {
                    jQuery.ajax({
                        url : '/getCity/' +provinceID,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            jQuery('select[name="destination"]').empty();
                            jQuery.each(data, function(key,value){
                                $('select[name="destination"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $('select[name="destination"]').empty();
                }
            });
        });
    </script>
