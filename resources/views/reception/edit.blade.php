


<!DOCTYPE html>
<html>
	<head>
		<link href="{{asset('assets/asset8/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
		<link href="{{asset('assets/asset8/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
		<!-- Font special for pages-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	
		<!-- Vendor CSS-->
		<link href="{{asset('assets/asset8/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
		<link href="{{asset('assets/asset8/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">
	
		<!-- Main CSS-->
		<link href="{{asset('assets/asset8/css/main.css')}}" rel="stylesheet" media="all">	
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
				<form action="{{route('user.update', $user->id)}} "method="POST">
					@method('patch')
					<h3>Personal details</h3>
                    @csrf
					
					<div class="form-wrapper">
						<input type="hidden" placeholder="Username" class="form-control"name="name">
						
					</div>
					
					<div class="form-wrapper">
						<input type="hidden" placeholder="Email Address" class="form-control" name="email" value="{{$user->email}}">
					
					</div>
					<div class="col-6">
						<div class="input-group">
							<div class="rs-select2 js-select-simple select--no-search">
								<select  name="payment" >
									<option disabled="disabled" selected="selected">roles</option>
									<option  value="{{'1'}}"></option>
									<option  value="{{'2'}}">hospital</option>
									<option value="{{3}}">donor</option>
								   
								</select>
								<div class="select-dropdown"></div>
							</div>
						</div>
					
					
				
					<div class="form-wrapper">
						<input type="hidden" placeholder="Password" class="form-control" name="password" value="{{Auth::user()->password}}">
						
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
	
    <!-- Jquery JS-->
    <script src="{{asset('assets/asset8/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('assets/asset8/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/asset8/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets/asset8/vendor/datepicker/daterangepicker.js')}}"></script>
 <!-- Jquery JS-->
 <script src="{{asset('assets/asset8/vendor/jquery/jquery.min.js')}}"></script>
 <!-- Vendor JS-->
 <script src="{{asset('assets/asset8/vendor/select2/select2.min.js')}}"></script>
 <script src="{{asset('assets/asset8/vendor/datepicker/moment.min.js')}}"></script>
 <script src="{{asset('assets/asset8/vendor/datepicker/daterangepicker.js')}}"></script>

 <!-- Main JS-->
 <script src="{{asset('assets/asset8/js/global.js')}}"></script>
    <!-- Main JS-->
    <script src="{{asset('assets/asset8/js/global.js')}}"></script>

</html>
