@extends('layouts.main')
@section('title','Donation request')
@section('styles')
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets/asset7/css/style.css')}}">
@endsection

@section('content')

		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
				<h2 class="heading-section">Request from Donors</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="table-wrap">
					<table class="table table-striped">
					  <thead>
						<tr>
						  <th>User_Id</th>
						  <th>Full Name </th>
						  <th>Weight</th>

						  <th>Blood pressure </th>
						 
						  <th>Blood Group</th>
						  <th>Age</th>
						  <th>Location</th>
						  <th>Action</th>
						</tr>
					  </thead>
					  <tbody>
						  @foreach ($donors as $donor)
						  <tr>
							<th scope="row">1001{{$donor->id}}</th>
							<th scope="row">{{$donor->first_name}} {{$donor->last_name}}</th>
							<th scope="row">{{$donor->weight}}</th>
							<td>{{$donor->blood_pressure}}</td>
							<td>{{$donor->blood_type}}</td>
							<td>{{$donor->age}}yrs</td>
							<td>{{$donor->hospital_id}}</td>
							<td><a href="{{route('hospital.edit', $donor->id)}}" class="btn btn-success">Edit</a>
							 
						  
						  </td>
						  </tr>

					   
							  
						  @endforeach
					  
					  </tbody>
					</table>
				</div>
	
</section>

@endsection
@section('script')
<script src="{{asset('assets/asset7/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/asset7/js/popper.js')}}"></script>
<script src="{{asset('assets/asset7/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/asset7/js/main.js')}}"></script>

@endsection
	

