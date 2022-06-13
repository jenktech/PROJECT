@extends('layouts.main')
@section('title',)
@section('content')
<div class="container mt-2">
    <div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left mb-2">
    
    </div>
    <div class="pull-right">
    
    </div>
    </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
    </div>
    @endif
    <form action="{{route('roles.update',$role->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
    <div class="form-group">
    <strong>Change</strong>
    <input type="text" name="name" class="form-control" value="{{$role->name}}">
    @error('name')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    </div>
   
    
    <button type="submit" class="btn btn-info ml-2">Submit</button>
    </div>
    </form>
   
    
@endsection

    
@endsection


  