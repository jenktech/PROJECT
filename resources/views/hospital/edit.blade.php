@extends('layouts.main')
@section('title','donors record')
    
@section('styles')
<link href="{{asset('assets/asset8/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('assets/asset8/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="{{asset('assets/asset8/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('assets/asset8/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">
<link href="{{asset('assets/asset8/css/main.css')}}" rel="stylesheet" media="all">
@endsection
        @section('content')
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Donors infomation</h2>
                <form action="{{route('hospital.update', $donors->id)}} "method="POST">
                    @csrf
                    @method('patch')
                    <input type="hidden" name="hospital_id" value="{{$donors->hospital_id}}">
                
                        <input class="input--style-2" type="hidden" placeholder="first_name" name="first_name" value="{{$donors->first_name}}">
                    
                        <div class="input-group">
                            <input class="input--style-2" type="hidden" placeholder="user_id" name="user_id" value="{{Auth::user()->id}}">
                    
                    <div class="input-group">
                        <input  type="text"class="input--style-2" placeholder="blood_pressure" name="blood_pressure" value="blood pressure" >
                    </div>
                   
                        <input class="input--style-2" type="hidden" placeholder="last_name" name="last_name"value="{{$donors->last_name}}">
                  
                    
                        <input class="input--style-2" type="hidden" placeholder="phone number" name="phone"value="{{$donors->phone}}">

                  
                        <div class="form-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="blood_type" id="blood_type">
                                    <option selected disabled >chagua kundi la damu</option>
                                    <option value="A">A+</option>
                                    <option value="B">B+</option>
                                    <option value="AB">AB+</option>
                                    <option value="An">A-</option>
                                    <option value="Bn">B-</option>
                                    <option value="O">O+</option>
                                    <option value="ABn">AB-</option>
                                    <option value="On">O-</option>
                                
                                
                                
                                </select>
                                
                                
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                    
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="weight" name="weight" value="{{$donors->weight}}" >
                        </div>
                    </div>
                   
                 
                  
                
                        <button class="btn btn--radius btn--green" type="submit">submit</button>
                        @endsection
                </form>
        
       
           
       
@section('scripts')
<script src="{{asset('assets/asset8/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/asset8/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/asset8/vendor/datepicker/moment.min.js')}}"></script>
<script src="{{asset('assets/asset8/vendor/datepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/asset8/js/global.js')}}"></script>

@endsection

