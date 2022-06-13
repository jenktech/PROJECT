@extends('layouts.main')
@section('title','Requesting from other hospital')
	
@section('styles')

@endsection
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
 
    
  
					<div class="card">
						<div class="card-body">
							
							<h5 class="card-title">Total Donor = {{$donor}}</h5>
							<div class="table-responsive">
								<table id="zero_config" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Full name</th>
											<th>Weight</th>
						
											<th>Blood pressure</th>
											<th>Blood type</th>
											<th>Age</th>
											<th>Action</th>
										
										</tr>
									</thead>
									<tbody>
										@foreach ($donors as $donor)
										<tr>
											<td>{{$donor->first_name}} {{$donor->last_name}}</td>
											<td>{{$donor->weight}}</td>
											<td>{{$donor->blood_pressure}}</td>
											<td>{{$donor->blood_type}}</td>
											<td>{{$donor->age}}</td>
											<td><a href="{{route('hospital.edit', $donor->id)}}" class="btn btn-success">Edit</a>
											   
											
											</td>
										</tr>
										@endforeach
									</tbody>
											
										
									

						</div>
					</div>
				</div>
			</div>
@endsection
			
@section('script')

@endsection
	

