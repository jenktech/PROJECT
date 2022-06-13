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
		<h2 class="heading-section">Taarifa za bodi ya damu salama
</div> 
<div class="row">
	<div class="col-md-12">
		<div class="table-wrap">
			<table class="table table-striped">
			  <thead>
				<tr>
				  <th>wachangiaji wa damu (idadi)
                      jumla
                  </th>
				  <th>hospital (idadi)</th>
				  <th>kiasi cha damu</th>
				  <th>matumizi ya damu</th>
				  <th>mahitaji kwa mwaka</th>
				  <th>Status</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
                 
                        
                 
				
				
                   
					<td>  {{$users}}</td>
					<td>  {{$user}}</td>
					<td>{{$hospitals}} mil</td>
					<td>{{$rbloods}} mil</td>
                    <td>12000 mil</td>
                    <td>{{$hospitals-12000}}</td>
					<td>
						
					</td>
				  </tr>
               
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
	

