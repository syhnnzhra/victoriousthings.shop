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
			<div class="wrap-login101">

				<form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
					<span class="login100-form-title">
						Register
					</span>
                    @csrf

					<div class="wrap-input100">
						<input class="input100 @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name">
						@error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.com">
						<input class="input100 @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
						@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100 @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password">
						@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100 @error('password') is-invalid @enderror" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
						<i class="fa fa-lock" aria-hidden="true"></i>
					</div>      
                    <div class="form-group {{$errors->has('level') ? 'has-error' : ''}}">
                        <label for="name" class="col-md-4 col-form-label text-md-right"></label>
                        <div class="col-md-6">
							<!-- <select name="level" id="">
								<option value="user">User</option>
								<option value="admin">Admin</option>
							</select> -->
                            <input type="hidden" name="level" value="user">
                        </div>
                    </div>      
                    
					<div class="container-login100-form-btn ">
						<button class="login100-form-btn"  type="submit">
							{{ __('Register') }}
						</button>
					</div>

					<div class="text-center">
						<a class="txt2" href="{{ route('login') }}">
							Already have an account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
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
