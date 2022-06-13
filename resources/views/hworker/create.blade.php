@extends('layouts.main')

@section('title', 'complete your regstratio')
    

@section('styles')
    <link href="{{asset('assets/asset8/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/asset8/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('assets/asset8/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/asset8/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('assets/asset8/css/main.css')}}" rel="stylesheet" media="all">
@endsection

@section('content')
    <div class="card card-2">
        <div class="card-heading"></div>
        <div class="card-body">
            @include('admin.info')
            <h2 class="title">Complete  your registration</h2>
            <form method="POST" action="{{route('hworker.store')}}">
                @csrf
                
  
           
            <div class="input-group">
                <input class="input--style-2" type="text" placeholder="First name" name="first_name"required>
            </div>
                
                
            <div class="input-group">
                <input class="input--style-2" type="text" placeholder="Last name" name="last_name"required>
            </div>
            <div class="input-group">
            </div>
            <input class="input--style-2" type="text" placeholder="Blood group A+" name="A"required>
            <div class="input-group">
            </div>
            <input class="input--style-2" type="text" placeholder="Blood group  B+" name="B"required>
            <div class="input-group">
            </div>
            <input class="input--style-2" type="text" placeholder="Blood group  AB+" name="AB"required>
            <div class="input-group">
            </div>
            <input class="input--style-2" type="text" placeholder="Blood group  A-" name="An"required>
            <div class="input-group">
            </div>
            <div class="input-group">
                <input class="input--style-2" type="text" placeholder="Blood group  B-" name="Bn"required>
            </div>

            <div class="input-group">
                <input class="input--style-2" type="text" placeholder="Blood group  O-" name="On"required>
            </div>
            <div class="input-group">
                <input class="input--style-2" type="text" placeholder="Blood group  O+" name="O"required>
            </div>
            <div class="input-group">
                <input class="input--style-2" type="text" placeholder="Blood group  AB-" name="ABn"required>
            </div>
            <div class="input-group">
                <input class="input--style-2" type="text" placeholder="Hospital name" name="name"required>
            </div>

                <div class="form-group">
                <div >
                    <select name="region_id" id="region" class="form-control">
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
                    <select name="district_id" id="district"> 
                        <option selected disabled>District</option>
                    
                    </select>
                    <div class="select-dropdown"></div>
                </div>
                <hr>
            </div>
            <div class="p-t-30">
                <button class="btn btn--radius btn--green" type="submit">Submit</button>
            </div>
                </div>
                
                </div>
                
            </form>

        </div>
        
    </div>
@endsection

@section('scripts')
    <script src="{{asset('assets/asset8/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/asset8/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/asset8/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets/asset8/vendor/datepicker/daterangepicker.js')}}"></script>
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
                        $.each(result, function(key, value){
                            district.append("<option value="+key+">"+value+"</option>");
                        })
                    }
                })
            })

           
        });
    </script>
    <script src="{{asset('assets/asset8/js/global.js')}}"></script>
@endsection
