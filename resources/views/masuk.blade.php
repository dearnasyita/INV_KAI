<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Sistem Pendataan Inventaris</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{('/assets/img/logokai.png')}}" sizes="any" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('/asset/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('/asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('/asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('/asset/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{('/asset/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('/asset/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('/asset/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{('/asset/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('/asset/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{('/asset/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url(asset/gambar4.jpg); background-size: 100%;">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(asset/gambar3.jpg); background-size: auto;">
					<span class="login100-form-title-1">
						Sistem Pendataan Inventaris
					</span>
				</div>

                    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="wrap-input100 validate-input m-b-26{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="label-input100">E-Mail Address</label>
                            <div>
                                <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus placeholder="Enter email address">
								<span class="focus-input100"></span>  
                            </div>
                        </div>

                        <div class="wrap-input100 validate-input m-b-26{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="label-input100">Password</label>
                            <div>
								<input id="password" type="password" class="input100" name="password" required placeholder="Enter password">
                                <span class="focus-input100"></span>
                            </div>
                        </div>
						<div>
								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
						</div>
						<div class="flex-sb-m w-full p-b-30">
							<div class="contact100-form-checkbox">
							<input class="input-checkbox100" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
								<label class="label-checkbox100" for="ckb1">
									Remember me
								</label>
							</div>

							<div>
								<a href="{{ route('password.request') }}" class="txt1">
									Forgot Password?
								</a>
							</div>
						</div>

						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Login
							</button>
						</div>
                    </form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="{{('/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{('/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{('/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{('/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{('/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{('/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{('/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{('/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{('/js/main.js')}}"></script>

</body>
</html>