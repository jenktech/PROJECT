@extends('layouts.main')
@section('title','hospital info')
	


@section('styles')
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets/asset7/css/style.css')}}">
@endsection
@section('content')
<div class="row justify-content-center">
	<div class="col-md-6 text-center mb-2">
	
</div>
<div class="row">
	<div class="col-md-12">
		<div class="table-wrap">
			<table class="table table-striped">
			  <thead>
				<tr>
				  <th>User_Id</th>
				  <th>Role name</th>
				  <th>email</th>
				  <th>Full Name </th>
				 
				 
				  <th>Action</th>
				</tr>
			  </thead>
			  <tbody>
				  @foreach ($users as $user)
				  <tr>
					<th scope="row">1001{{$user->id}}</th>
					<th scope="row">{{$user->role->name}}</th>
					<td>{{$user->email}}</td>
					<td>{{$user->name}}</td>

					
					
					<td>
						<form action="{{route('user.destroy', $user->id)}}"method="POST">
							@csrf
						
						<a href="{{route('user.edit', $user->id)}}" class="btn btn-success">Edit</a>
					
						
				  </td>
				</form>
				  </tr>

			   
					  
				  @endforeach
			  
			  </tbody>
			</table>
		</div>
	</div>
@endsection
@section('script')
<script src="{{asset('assets/asset7/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/asset7/js/popper.js')}}"></script>
<script src="{{asset('assets/asset7/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/asset7/js/main.js')}}"></script>

@endsection			
			

	
	
