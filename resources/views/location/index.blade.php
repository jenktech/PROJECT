@extends('layouts.main')
@section('title','taarifa za damu')
@section('styles')
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="{{asset('assets/asset7/css/style.css')}}">

@endsection

@section('content')
 
<div class="row justfy-content-left">
	<b class="logo-icon ps-2">
		<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
		<!-- Dark Logo icon -->
		<img src="{{asset('assets/asset/assets/images/a.png')}}" width="150" height="120" class="light-logo" />
	
	</b>
</div>
<div class="row justify-content-center">
	
	<div class="col-md-12 text-center mb-5 z-index-1">
		
		<h2 class="heading-section" >Information about Blood Request,Donation and Stock  in Nothern zone  </h2>
	</div>
	
</div>
<div class="row">
	<div class="col-md-12">
		<div class="table-wrap">
			<table class="table table-striped">
			  <thead>
				<tr>
				  <th>Blood Groups</th>
				  <th>A+</th>
				  <th>B+</th>
				  <th>AB+</th>
				  <th>B-</th>
				  <th>A-</th>
				  <th>O</th>
				  <th>O</th>
				  <th>AB-</th>

				</tr>
				
			  </thead>
			  <tbody>
				
				  <tr>
					<th scope="row">Total(Mils)</th>
					<td>{{$hospital}}</td>
					<td>{{$hospitalb}}</td>
					<td>{{$hospitalab}}</td>
					<td>{{$hospitalan}}</td>
					<td>{{$hospitalbn}}</td>
					<td>{{$hospitalon}}</td>
					<td>{{$hospitalo}}</td>
					<td>{{$hospitalabn}}</td>
				  </tr>
                 


				  <tr>
					<th>Location</th>
					<th>Regions</th>
					<th></th>
				
					
					<th></th>
					
					<th>Districts</th>
					<th></th>
				
					
					<th>hospital</th>
					
					<th></th>
					<th></th>
					
  
				  </tr>
				  <tr>
				<td>Total</td>
					<td>{{$regions}}</td>
					<td></td>
					
					<td></td>
					<td>{{$districts}}</td>
					<td></td>
				
				
					<td>{{$users}}</td>

					<td></td>
					<td></td>
					
				</tr>
				<tr>
					<th> Total Blood request</th>
					<th>A+</th>
					<th>B+</th>
					<th>AB+</th>
					<th>B-</th>
					<th>A-</th>
					<th>O</th>
					<th>O-</th>
					<th>AB-</th>
  
				  </tr>
				  
				</thead>
				<tbody>
				  
					<tr>
					  <th scope="row">Total(Mils)</th>
					  <td>{{$rbloodA}}</td>
					  <td>{{$rbloodB}}</td>
					  <td>{{$rbloodAB}}</td>
					  <td>{{$rbloodBn}}</td>
					  <td>{{$rbloodAn}}</td>
					  <td>{{$rbloodO}}</td>
					  <td>{{$rbloodOn}}</td>
					  <td>{{$rbloodABn}}</td>
					</tr>
				   
  
			  
				
				 
				
					<tr>
						<th><button class="btn btn-success">Print</button></th>
						
					  </tr>
				  
					
					 
                 


			  
			  </tbody>
			  
			</table>
@endsection
			
		@section('scripts')
		<script src="{{asset('assets/asset7/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/asset7/js/popper.js')}}"></script>
		<script src="{{asset('assets/asset7/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/asset7/js/main.js')}}"></script>
	  
		@endsection



