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
                    <div class="row justfy-content-left">
                        <b class="logo-icon ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{asset('assets/asset/assets/images/a.png')}}" width="150" height="120" class="light-logo" />
                        
                        </b>
                    <div class="card-body">
                        <h5 class="card-title">Hospital and Bloods Groups</h5>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Hospital</th>
                                <th scope="col">A</th>
                                <th scope="col">B</th>
                                <th scope="col">AB</th>
                                <th scope="col">O</th>
                                <th scope="col">O-</th>
                                <th scope="col">B-</th>
                                <th scope="col">AB-</th>
                                <th scope="col">A-</th>
                                
                            </tr>
                            
                        </thead>
                        <tbody>
                          
                            <tr>
                                @foreach($records as $record)
                                <th scope="row">{{$record->id}}</th>
                                <td>{{$record->name}}</td>
                                <td>{{$record->A}}</td>
                                <td>{{$record->B}}</td>
                                <td>{{$record->AB}}</td>
                                <td>{{$record->O}}</td>
                                <td>{{$record->On}}</td>
                                <td>{{$record->Bn}}</td>
                                <td>{{$record->ABn}}</td>
                                
                             
                                <td>{{$record->An}}</td>
                            </tr>
                           
                            @endforeach
                            
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                  
                                </div>
                                <table class="table">
                                   
                <div class="card">
                    <div class="card-body">
                        
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Hospital name</th>
                                        <th>District</th>
                                        <th>Region</th>
                                        <th>Total of donors request </th>
                                       
                                        <th>Total Donation </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($records as $record)
                                    <tr>
                                        <td>{{$record->id}}</td>
                                        <td>{{$record->name}}</td>
                                        <td>{{$record->district->name}}</td>
                                        <td>{{$record->district->region->name}}</td>
                                        <td>{{$record->donors->count('hospital_id')}}</td>
                                        <td>8</td>
                                    </tr>
                                    @endforeach
                                  
                                
                                </tbody>
                               
                                        
        </table>
           
       
        <td><button class="btn btn-success">Print report</button></td>                
                                   
                             
    <footer class="footer text-center">
    
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
@endsection
			
@section('script')

@endsection
	

