@extends('layouts.main')

@section('title', 'Home')
    
@section('content')

    <div class="row">
       

    </div>
   
    @if(Auth::user()->hworker)
    <div class="row">
         <div class="col-md-12">
             <div class="card card-hover">
                 <div class="box bg-white text-center">
                 <h1 class="font-light text-danger"></h1>
                 <a class="" href="{{route('blood.index')}}" >
                     <span class="fa-stack fa-3x ">
                         <i class="fa fa-circle fa-stack-2x"> </i>
                         <i class="fa fa-bell fa-stack-1x fa-inverse" >{{$notifies}}</i>
                     </span>
                 </a>
                 </div>
             </div>
         </div>
    </div>
     <!-- Column -->    
    <div class="row">
         <div class="col-md-3">
             <div class="card card-hover">
                 <div class="box bg-success text-center">
                     <h1 class="font-light text-white">A+</h1>
                     <h6 class="text-white"> unit available :{{$hospital->A}}mill</h6>
                 </div>
             </div>
         </div>
         <!-- Column -->
         <div class="col-md-3">
             <div class="card card-hover">
                 <div class="box bg-warning text-center">
                     <h1 class="font-light text-white">B+</i></h1>
                     <h6 class="text-white"> unit:{{$hospital->B}}mill</h6>
                 </div>
             </div>
         </div>
         <!-- Column -->
         <div class="col-md-3">
             <div class="card card-hover">
                 <div class="box bg-danger text-center">
                     <h1 class="font-light text-white">AB+</i></h1>
                     <h6 class="text-white">unit:{{$hospital->AB}}mill</h6>
                 </div>
             </div>
         </div>

         <div class="col-md-3">
             <div class="card card-hover">
                 <div class="box bg-warning text-center">
                     <h1 class="font-light text-white">AB-</i></h1>
                     <h6 class="text-white"> unit:{{$hospital->ABn}}mill</h6>
                 </div>
             </div>
         </div>
    </div>
    
 <div class="row">
     
     <!-- Column -->
     <div class="col-md-3">
         <div class="card card-hover">
             <div class="box bg-info text-center">
                 <h1 class="font-light text-white">O+</i></h1>
                 <h6 class="text-white">unit:{{$hospital->O}}mill</h6>
             </div>
         </div>
     </div>
 
     <!-- Column -->
     <div class="col-md-3">
         <div class="card card-hover">
             <div class="box bg-danger text-center">
                 <h1 class="font-light text-white">O-</i></h1>
                 <h6 class="text-white">unit:{{$hospital->On}}mill</h6>
             </div>
         </div>
     </div>

     <!-- Column -->
     <div class="col-md-3">
         <div class="card card-hover">
             <div class="box bg-info text-center">
                 <h1 class="font-light text-white">A-</i></h1>
                 <h6 class="text-white">unit:{{$hospital->An}}mill</h6>
             </div>
         </div>
     </div>

     <div class="col-md-3">
         <div class="card card-hover">
             <div class="box bg-info text-center">
                 <h1 class="font-light text-white">B-</i></h1>
                 <h6 class="text-white">unit:{{$hospital->On}}mill</h6>
             </div>
         </div>
     </div>
 </div>

 </ul>
 @endif    

@endsection

</li>
            
               