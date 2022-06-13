
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
						<input type="text" placeholder="Username" class="form-control"name="name" required>
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="hidden" placeholder="hidden" class="form-control"name="role_id"value="{{'3'}}">
						
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Email" class="form-control" name="email" required>
						<i class="zmdi zmdi-email"></i>
					</div>
					
					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control"name="password" required>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div>
						<a href="{{'login'}}" class="txt1">
							already have account
						</a>
					<button class="btn btn-red" type="submit">Complete registration
						<i class="zmdi zmdi-arrow-right"></i>
					</button>\
					   
					</div>
				</form>
			</div>
		</div>
		
	</body>
</html>
