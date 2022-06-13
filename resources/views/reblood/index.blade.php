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
                        <h5 class="card-title">Hospital Bloods Collection</h5>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Groups</th>
                                
                                <th scope="col">A+</th>
                                <th scope="col">B+</th>
                                <th scope="col">AB+</th>
                                <th scope="col">O+</th>
                                <th scope="col">O-</th>
                                <th scope="col">B-</th>
                                <th scope="col">AB-</th>
                                <th scope="col">A-</th>
                                
                            </tr>
                            
                        </thead>
                        <tbody>
                          
                            <tr>
                              
                                <th scope="row">{{$hospital->id}}</th>
                                <td scope="col">Units</td>
                               
                                <td>{{$hospital->A}}</td>
                                <td>{{$hospital->B}}</td>
                                <td>{{$hospital->AB}}</td>
                                <td>{{$hospital->O}}</td>
                                <td>{{$hospital->On}}</td>
                                <td>{{$hospital->Bn}}</td>
                                <td>{{$hospital->ABn}}</td>
                                <td>{{$hospital->An}}</td>
                            </tr>
                           
                            
                        </tbody>
                    </table>
                    <div class="card-body">
                        <h5 class="card-title">Hospital  Bloods Requested and Usage</h5>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Groups</th>
                                
                                <th scope="col">A+</th>
                                <th scope="col">B+</th>
                                <th scope="col">AB+</th>
                                <th scope="col">O+</th>
                                <th scope="col">O-</th>
                                <th scope="col">B-</th>
                                <th scope="col">AB-</th>
                                <th scope="col">A-</th>
                                
                            </tr>
                            
                        </thead>
                        <tbody>
                          
                            <tr>
                              
                                <th scope="row">{{$hospital->id}}</th>
                                <td scope="col">Units</td>
                               
                                <td>{{$hospital->A}}</td>
                                <td>{{$hospital->B}}</td>
                                <td>{{$hospital->AB}}</td>
                                <td>{{$hospital->O}}</td>
                                <td>{{$hospital->On}}</td>
                                <td>{{$hospital->Bn}}</td>
                                <td>{{$hospital->ABn}}</td>
                                <td>{{$hospital->An}}</td>
                            </tr>
                           
                            
                        </tbody>
                    </table>
               
           
       
        <td><button class="btn btn-success">Generate report</button></td>                
                                   
                             
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
	

