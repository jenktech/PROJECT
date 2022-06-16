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

        <form method="POST" action="{{route('session.store')}}">
            @csrf
            <div class="input-group class=" wrap-input100 validate-input m-b-26" data-validate="Username is required">

                <input class="input--style-2" type="text" placeholder="First name" name="first_name" value="{{ $donor->first_name }}">
            </div>

            <div class="input-group">
                <input class="input--style-2" type="text" placeholder="middle name" name="middle_name" value="{{ $donor->middle_name }}">
            </div>
            <div class="input-group">
                <input class="input--style-2" type="text" placeholder="Last name " name="last_name" value="{{ $donor->last_name }}">
            </div>
            <div class="input-group">
                <input class="input--style-2" type="text" placeholder="Phone number" name="phone" value="{{ $donor->phone }}">

            </div>

            <div class="row row-space">
                <div class="col-6">
                    <div class="input-group">
                        <input class="input--style-2" type="text" placeholder="Age" name="age" value="{{ $donor->age }}">

                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="gender">
                                <option disabled="disabled" selected="selected">Gender</option>
                                <option value="male" {{ $donor->gender == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ $donor->gender == 'female' ? 'selected' : '' }}>Female</option>


                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="rs-select2 js-select-simple select--no-search">
                    <select name="payment_method" id="region">
                        <option selected disabled>Payment means</option>
                        @forelse ($regions as $region)
                        <option value="{{$region->id}}" {{ old('payment_method') == $region->id ? 'selected' : '' }}> {{ $region->name }}</option>
                        @empty
                        <option disabled>empty</option>
                        @endforelse

                    </select>
                    <div class="select-dropdown"></div>
                </div>
            </div>
            <hr>
            <div class="form-group mt-3 ">
                <div class="rs-select2 js-select-simple select--no-search">
                    <select name="insurance_company" id="district">
                        <option selected disabled>No payment mean</option>

                    </select>
                    <div class="select-dropdown"></div>
                </div>
                <hr>
            </div>

            <div class="input-group">
                <input class="input--style-2" type="text" placeholder="Card Number" name="card_number" value="{{ $donor->card_number }}">
            </div>

            <div class="input-group">
                <input class="input--style-2" type="text" placeholder="weight" name="weight">
            </div>
            <div class="input-group">
                <input class="input--style-2" type="text" placeholder="blood_pressure" name="blood_pressure">
            </div>
            <div class="input-group">
                <input class="input--style-2" type="text" placeholder="height" name="height">
            </div>

            <div class="row row-space">
                <div class="col-12 mt-4">
                    <div class="input-group">
                        <textarea class="input--style-2 form-control p-2" type="text" placeholder="Complaint" rows="5" name="complaint"></textarea>
                    </div>
                </div>

                <div class="row row-space">
                    <div class="col-12 mt-4">
                        <select name="hworker_id" id="region" class="form-control">
                            <option selected disabled>Doctor</option>
                            @forelse ($doctors as $doctor)
                            <option value="{{$doctor->id}}"> {{ $doctor->first_name }}</option>
                            @empty
                            <option disabled>empty</option>
                            @endforelse

                        </select>
                        <div class="select-dropdown"></div>
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
    $(document).ready(function() {
        var _token = $('input[name="_token"]').val();
        var district = $('#district');
        var centre = $('#centre');

        $('#region').change(function() {
            var region = $(this).val();
            $.ajax({
                url: "/region-data/" + region
                , method: "GET"
                , data: {
                    id: region
                    , _token: _token
                }
                , success: function(result) {
                    district.empty();
                    centre.empty();
                    district.append("<option selected>Select instute</option>");
                    centre.append("<option selected>Select nearby hospital</option>");
                    $.each(result, function(key, value) {
                        district.append("<option value=" + key + ">" + value + "</option>");
                    })
                }
            })
        })

        district.change(function() {
            var district_id = $(this).val();
            $.ajax({
                url: "/district-data/" + district_id
                , method: "GET"
                , data: {
                    id: district_id
                    , _token: _token
                }
                , success: function(result) {
                    centre.empty();
                    centre.append("<option selected>Select nearby hospital</option>");
                    $.each(result, function(key, value) {
                        centre.append("<option value=" + key + ">" + value + "</option>");
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

