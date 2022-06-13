@extends('layouts.main')
@section('title','Requesting from other hospital')
	
@section('styles')
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets/asseti/css/style.css')}}">
@endsection
@section('content')
<div class="row justify-content-center">
	<div class="col-md-6 text-center mb-5">
		<h2 class="heading-section">Request From other Hospital</h2>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="table-wrap">
			<table class="table table-striped">
			  <thead>
				<tr>
				  <th>ReId</th>
				  <th>Hospital name</th>
				  <th>blood group</th>
				  <th>unit</th>
				  <th>requesting time</th>
				  <th>Status</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
					@foreach ($rbloods as $rblood)
					<th scope="row">000{{$rblood->id}}</th>
					<td>{{$rblood->user->name}}</td>
					<td>{{$rblood->blood_type}}</td>
					<td>{{$rblood->unit}}</td>
					<td>{{$rblood->created_at}}</td>
					<td>
						<form action="{{route('blood.update', $rblood->id)}}" method="POST">
							@csrf
							@method('patch')
							<input type="hidden" name="blood_type" value="{{$rblood->blood_type}}">
							<input type="hidden" name="units" value="{{$rblood->unit}}">
							@if ($rblood->confirmed === 0)
								<a class="btn btn-success"href="{{route('minus',$rblood->id)}}">confirm</a>
							@else
								<span>Confirmed</span>
							@endif
						</form>
					</td>
				  </tr>

					@endforeach
				 
				<tr>
				 
			   
				  
			  </tbody>
			</table>
		</div>
	</div>

</section>
@endsection
			
@section('script')
<script src="{{asset('assets/asseti/js/jquery.min.js')}}"></script>
<script src= "{{asset('assets/asseti/js/popper.js')}}"></script>
<script src="{{asset('assets/asseti/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/asseti/js/main.js')}}"></script>

@endsection
	

