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
            @include('admin.info')
            <h2 class="title">Posts and News</h2>
            <form method="POST" enctype="multipart/form-data"action="{{route('post.store')}}">
                @csrf
                <div class="input-group">
                   <input type='file' name="image_path">
                </div>
                <div class="input-group">
                    <input class="input--style-2" type="text" placeholder="title" name="title" id="unit"required>
                </div>
            
                <div class="input-group">
                    <textarea name="news" id="" cols="50" rows="3" placeholder="Caption"></textarea>
                </div>
            
               
            
              
                
               
              
            
                <div class="p-t-30">
                    <button class="btn btn--radius btn--green" type="submit" id="test">submit</button>
                </div>
            </form>
        </div>
        
    </div>
    
@endsection

@section('scripts')

    <script src="{{asset('assets/asset8/js/global.js')}}"></script>
@endsection
