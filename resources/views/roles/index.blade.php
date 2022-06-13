@extends('layouts.main')

@section('content')

    <a class="btn btn-success" href="{{ route('roles.create') }}"> Create role</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>
        </div>
    @endif  

    <table class="table table-bordered">
        <tr>
            <th>S.No</th>
            <th>Role Name</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($roles as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->name}}</td>

                <td>
                    <form action="{{route('roles.destroy',$role->id)}}"method="POST">
                    @csrf
                    <a class="btn btn-primary" href="{{route('roles.edit',$role->id)}}">Edit</a>
            
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
@endsection