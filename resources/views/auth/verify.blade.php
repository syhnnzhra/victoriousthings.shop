<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Login</title>
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
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Verify Your Email Address
					</span>
                    <div class="wrap-input100">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif
                    <div style="color: aliceblue">
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}
                    </div>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                    <div class="container-login100-form-btn ">
						<button class="login100-form-btn" type="submit">
							{{ __('click here to request another') }}
						</button>
					</div>				
					<div class="text-center p-t-12">
						<a class="txt2" href="{{ route('register') }}">
							Back
						</a>
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
