<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>bmict</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('assets/fonts4/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('assets/css4/style.css')}}">
	</head>

	<body>

		<div class="wrapper" style="background-image: url({{asset('assets/images4/bloody.jpg')}});">
			<div class="inner">
				<div class="image-holder">
					<img src="{{asset('assets/images4/bloody2.jpg')}}" alt="">
				</div>
				<form action="{{route('register')}}"method="POST">

					<h3>Personal details</h3>
                    @csrf
					
					<div class="form-wrapper">
						<input type="hidden" placeholder="Username" class="form-control"name="name">
						
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="text" class="form-control"name="role_id"value="{{$user->role_id}}">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="hidden" placeholder="Email Address" class="form-control" name="email" value="{{$user->email}}">
					
					</div>
				
					<div class="form-wrapper">
						<input type="hidden" placeholder="Password" class="form-control"name="password"value="{{Auth::user()->password}}">
						
					</div>
					<div class="form-wrapper">
						<input type="hidden" placeholder="Confirm Password" class="form-control" name="password_confirmation"value="{{Auth::user()->password}}">
						
					</div>
					<button type="submit">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
