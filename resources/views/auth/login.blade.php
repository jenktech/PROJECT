
	

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="{{asset('assets/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts4/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css4/style.css')}}">

		

<div class="wrapper" style="background-image: url({{asset('assets/images4/bloody.jpeg')}});">
	<div class="inner">
		<div class="image-holder">
			<img src="{{asset('assets/images4/Bloody.jpg')}}" alt="">
		</div>
		<form action="{{route('login')}}"method="POST">

			<h3>Login</h3>
			@csrf
			@if(count($errors))
			<div class="form-group">
				<ul>
					@foreach ($errors->all() as $error)
					<li><span style="color:rgb(248, 130, 19)">{{$error}}</span></li>
						
					@endforeach
				</ul>

			</div>
		  @endif

		
			<div class="form-wrapper">
				<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder=" barua pepe" required>
					<span class="focus-input100"></span>
				</div>
			</div>
		
			<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required" requred>
				<span class="label-input100">Password</span>
				<input class="input100" type="password" name="password" placeholder=" andika nenosiri" required>
		
				<span class="focus-input100"></span>
			</div>
			
				
		
			
			<div class="flex-sb-m w-full p-b-30">
				<div class="contact100-form-checkbox">
					<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
					<label class="label-checkbox100" for="ckb1">
						remember me
					</label>
				</div>

				<div>
					<a href="{{'reset'}}" class="txt1">
						Forgot password?
					</a>
				</div>
			</div>

			<div class="container-login100-form-btn">
				<button class="login100-form-btn"type="submit">
					Login
					<i class="zmdi zmdi-arrow-right">
				</button>
			</div>
		</form>	
		<script src="{{asset('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
		<!--===============================================================================================-->
			<script src="{{asset('assets/vendor/animsition/js/animsition.min.js')}}"></script>
		<!--===============================================================================================-->
			<script src="{{asset('assets/vendor/bootstrap/js/popper.js')}}"></script>
			<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<!--===============================================================================================-->
			<script src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>
		<!--===============================================================================================-->
			<script src="{{asset('assets/vendor/daterangepicker/moment.min.js')}}"></script>
			<script src="{{asset('assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
		<!--===============================================================================================-->
			<script src="{{asset('assets/vendor/countdowntime/countdowntime.js')}}"></script>
		<!--===============================================================================================-->
			<script src="{{asset('assets/js/main.js')}}"></script>
		


	