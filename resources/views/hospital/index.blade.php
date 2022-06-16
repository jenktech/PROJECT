@extends('layouts.main')
@section('title','Requesting from other hospital')

@section('styles')

@endsection
@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->




    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Basic Datatable</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>User Id</th>
                                <th>Role name</th>
                                <th>Email</th>
                                <th>Full name</th>
                                <th>Start date</th>
                                <th>Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($sessions as $session)

                                <td>{{$session->id}}</td>
                                <td>{{$session->donor->first_name}} {{$session->donor->last_name}} </td>
                                <td>{{$session->donor->phone}}</td>
                                <td>{{$session->status}}</td>

                                <td>{{$session->updated_at}}</td>
                                <td>
                                    <form action="{{route('session.destroy', $session->id)}}" method="POST">
                                        @csrf
                                    </form>

                                    <a href="{{route('hospital.edit', $session->id)}}" class="btn btn-success">Attend</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>User Id</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Start date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

@endsection

