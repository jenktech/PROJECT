@extends('layouts.main')

@section('title', 'Register region')


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
        @include('admin.info')
        <h2 class="title">District Registration</h2>
       
        <form method="POST" action="{{route('location.store')}}">
          @csrf
            
          @if(count($errors))
          <div class="form-group">
              <ul>
                  @foreach ($errors->all() as $error)
                  <li><span style="color:rgb(204, 19, 19)">{{$error}}</span></li>
                      
                  @endforeach
              </ul>

          </div>
        @endif
            <div class="input-group">
              <input class="input--style-2" type="text" placeholder="Name" name="name" required>
          </div>
          <div class="form-group">
            <div >
                <select name="region_id" id="region" class="form-control" required>
                    <option selected disabled>Region</option>
                    @forelse ($regions as $region)
                        <option value="{{$region->id}}">{{$region->name}}</option>
                    @empty
                        <option disabled>No regions</option>
                    @endforelse
                   
                </select>
            </div>
            <div class="p-t-30">
                <button class="btn btn--radius btn--green" type="submit">Submit</button>
            </div>
            </div>
       
        </form>

    </div>
</div>
@endsection

            
     @section('script')
     <script src="{{asset('assets/asset8/vendor/jquery/jquery.min.js')}}"></script>
     <script src="{{asset('assets/asset8/vendor/select2/select2.min.js')}}"></script>
     <script src="{{asset('assets/asset8/vendor/datepicker/moment.min.js')}}"></script>
     <script src="{{asset('assets/asset8/vendor/datepicker/daterangepicker.js')}}"></script>
     <script src="{{asset('assets/asset8/js/global.js')}}"></script>
     @endsection
    



