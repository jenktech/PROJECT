@extends('layouts.main')
@section('title','roles')
@section('styles')
    
@section('content')

    <div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left mb-2">
    <h2>Create</h2>
    </div>
    <div class="pull-right">
    
    </div>
 
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
    </div>
    @endif
    <form action="{{route('roles.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
    <div class="form-group">
    
    <input type="text" name="name" class="form-control" placeholder="Create role">
    @error('name')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>

    
    <button type="submit" class="btn btn-info ml-2">submit</button>
    </div>
    </form>
    
@endsection


    
@endsection


  