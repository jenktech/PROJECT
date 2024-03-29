@extends('layouts.main')

@section('title','donor regstration')

@section('styles')
    <link href="{{asset('assets/asset8/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/asset8/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="{{asset('assets/asset8/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/asset8/css/main.css')}}" rel="stylesheet" media="all">
    
@endsection

@section('content')
<div class="card card-2">
    <div class="card-heading"></div>
    <div class="card-body">
        @include('admin.info')
        <h2 class="title">Client details</h2>
        
        <form method="POST"action="{{route('donor.store')}}">
            @csrf
            <div class="input-group class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
    
                <input class="input--style-2" type="text" placeholder="First name" name="first_name">
            </div>
            <div >
                <input  type="hidden" placeholder="blood_pressure" name="blood_pressure" value="blood pressure" >
            </div>
            <div class="input-group">
                <input class="input--style-2" type="text" placeholder="Last name " name="last_name">
            </div>
            <div class="input-group">
                <input class="input--style-2" type="text" placeholder="Phone number" name="phone">

            </div>
               
            <div >
                <input type="hidden" placeholder="blood_type" name="blood_type" value="blood_type">
            </div>
   
            <div class="">
                <input class="input--style-2" type="hidden" placeholder="user_id" name="user_id" value="{{Auth::user()->id}}">
            </div>
            <div class="row row-space">
                <div class="col-6">
                    <div class="input-group">
                        <input class="input--style-2" type="text" placeholder="Age" name="age">
                
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="gender">
                                <option disabled="disabled" selected="selected">Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                               
                               
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="rs-select2 js-select-simple select--no-search">
                    <select name="" id="region">
                        <option selected disabled>Region</option>
                        @forelse ($regions as $region)
                            <option value="{{$region->id}}">{{$region->name}}</option>
                        @empty
                            <option disabled>No regions</option>
                        @endforelse
                       
                    </select>
                    <div class="select-dropdown"></div>
                </div>
            </div>
            <hr>
            <div class="form-group mt-3 ">
                <div class="rs-select2 js-select-simple select--no-search">
                    <select name="district" id="district"> 
                        <option selected disabled>No regions</option>
                    
                    </select>
                    <div class="select-dropdown"></div>
                </div>
                <hr>
            </div>
        
            <div class="form-group mt-3 ">
                <div class="rs-select2 js-select-simple select--no-search">
                    <select name="hospital_id" id="centre"> 
                        <option selected disabled>Hospital</option>
                    
                    </select>
                    <div class="select-dropdown"></div>
                </div>
                <hr>
            </div>
            <div class="row row-space">
                <div class="col-12 mt-4">
                    <div class="input-group">
                        <input class="input--style-2" type="text" placeholder="Address" name="address">
                    </div>
                </div>
                <div class="">
                    <input class="input--style-2" type="hidden" placeholder="weight" name="weight" value="weight" >
                </div>
            </div>
            <div class="p-t-30">
                <button class="btn btn--radius btn--green" type="submit" id="test">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

  @section('scripts')
  <script src="{{asset('assets/asset8/vendor/jquery/jquery.min.js')}}"></script>
  <!-- Vendor JS-->
  <script src="{{asset('assets/asset8/vendor/select2/select2.min.js')}}"></script>
  <script src="{{asset('assets/asset6/js/boostrap.min.js')}}"></script>
  <script>
      $(document).ready(function (){
          var _token = $('input[name="_token"]').val();
          var district = $('#district');
          var centre = $('#centre');

          $('#region').change(function(){
              var region = $(this).val();
              $.ajax({
                  url:"/region-data/"+region,
                  method: "GET",
                  data: {id:region, _token:_token},
                  success:function(result){
                      district.empty();
                      centre.empty();
                      district.append("<option selected>Select District</option>");
                      centre.append("<option selected>Select nearby hospital</option>");
                      $.each(result, function(key, value){
                          district.append("<option value="+key+">"+value+"</option>");
                      })
                  }
              })
          })

          district.change(function(){
              var district_id = $(this).val();
              $.ajax({
                  url:"/district-data/"+district_id,
                  method: "GET",
                  data: {id:district_id, _token:_token},
                  success:function(result){
                      centre.empty();
                      centre.append("<option selected>Select nearby hospital</option>");
                      $.each(result, function(key, value){
                          centre.append("<option value="+key+">"+value+"</option>");
                      })
                  }
              })
          })
      });
  </script>
  <!-- Main JS-->
  <script src="{{asset('assets/asset8/js/global.js')}}"></script>
  @endsection        
      
    <!-- Jquery JS-->
   

