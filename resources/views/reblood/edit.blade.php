@extends('layouts.main')

@section('title', 'Request Blood')

@section('styles')
    <link href="{{asset('assets/asset8/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/asset8/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="{{asset('assets/asset8/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('assets/asset6/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/asset8/css/main.css')}}" rel="stylesheet" media="all">
@endsection

@section('content')
    <div class="card card-2">
        <div class="card-heading"></div>
        <div class="card-body">
            <h2 class="title">Request blood </h2>
            <form method="POST"action="{{route('reblood.store')}}">
                @csrf
                <div class="input-group">
                    <input class="input--style-2" type="text" placeholder="unit" name="unit" id="unit"required>
                </div>
            
                <div class="input-group">
                    <input class="input--style-2" type="text" placeholder="blood_group" name="blood_type" id="blood_type"required>
                </div>
                
            
                <div class="">
                    <input class="input--style-2" type="hidden" placeholder="user_id" name="user_id" value="{{Auth::user()->id}}">
                </div>
                <div class="row row-space">
                    
                    
                </div>
                <div class="form-group">
                    <div class="rs-select2 js-select-simple select--no-search">
                        <select name="hospital_id" id="hospital_id">
                            <option selected disabled >select hospital</option>
                        
                        
                        </select>
                        
                        <div class="select-dropdown"></div>
                    </div>
                </div>
                
                
                <div class="form-group mt-3 ">
                    <div class="rs-select2 js-select-simple select--no-search">
                        
                    </div>
                    
            
                <div class="form-group mt-3 ">
                    
                        
                        
                        <div class="select-dropdown"></div>
                    </div>
                    <hr>
                </div>
                <div class="input-group">
                    <input class="input--style-2" type="text" placeholder="phone no" name="phone" required>
                </div>
                
                <div class="p-t-30">
                    <button class="btn btn--radius btn--green" type="submit" id="test">submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('assets/asset8/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/asset8/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/asset6/js/boostrap.min.js')}}"></script>
    <script>
        $(document).ready(function (){
            var _token = $('input[name="_token"]').val();
            var hospital = $('#hospital');
            var unit = $('#unit');
            var blood_type = $('#blood_type');

            $('#unit').keyup(function(){
                var unit_value = $(this).val();
                var b_type = blood_type.val();
                $.ajax({
                    url:"/bloodhosp/"+b_type+'/'+unit_value,
                    method: "GET",
                    data: {type:b_type, quantity:unit_value,  _token:_token},
                    success:function(result){
                        $('#hospital_id').empty();
                        $('#hospital_id').append("<option disabled selected>Choose Hospital</option>");
                        $.each(result, function(key, value){
                            $('#hospital_id').append("<option value="+key+">"+value+"</option>");
                        })
                    }
                })
            })

            $('#blood_type').keyup(function(){
                
                $.ajax({
                    url:"/bloodhosp/"+$('#blood_type').val()+'/'+$('#unit').val(),
                    method: "GET",
                    data: {type:$('#blood_type').val(), quantity:$('#unit').val(),  _token:_token},
                    success:function(result){
                        $('#hospital_id').empty();
                        $.each(result, function(key, value){
                            $('#hospital_id').append("<option value="+key+">"+value+"</option>");
                        })
                    }
                })
            })

        

        });
    </script>
    <script src="{{asset('assets/asset8/js/global.js')}}"></script>
@endsection