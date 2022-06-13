
@extends('layouts.main')

@section('title','taarifa binafsi')
@section('styles')
    
@endsection
@section('content')

    <div class="d-flex justify-content-center row">
       
            <div class="p-3 bg-white rounded">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-uppercase">BLOOD BANK</h1>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Contact us:</span><span class="ml-1">0712612000</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Address:</span><span class="ml-1">S.L.P 198</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">User ID:</span><span class="ml-1">#000</span></div>
                    </div>
                    <div class="col-md-6 text-right mt-3">
                        <h4 class="text-danger mb-0">Donate Bloood Save Life</h4>    <span>www.damusalama.com</span>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Receptionist</th>
                                    <th></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donors as $donor)
                                <tr>
                                    <td>Full name</td>
                                    

                                    <td>{{$donor->first_name}} {{$donor->last_name}}</td>
                                   
                                </tr>
                              
                                <tr>
                                    <td>Donation Date</td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td>Age</td>
                                    <td>miaka {{$donor->age}}</td>
                                    
                                </tr>
                                <tr>
                                    <td>Blood Group</td>
                                    <td>{{$donor->blood_type}}</td>
                                   
                                </tr>
                                <tr>
                                    <td>Body weight</td>
                                    <td>{{$donor->weight}}</td>
                                   
                                </tr>
                                <tr>
                                    <td>Hospital/Center</td>
                                    <td>{{$donor->hospital->name}}</td>
                                   
                                </tr>
                                <tr>
                                    <td>Phone number</td>
                                    <td>{{$donor->phone}}</td>
                                    
                                </tr>
                                <tr>
                                    <td>Location</td>
                                    <td>{{$donor->region}}</td>
                                   
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>

                <p>Congratulation  {{$donor->first_name}} {{$donor->last_name}}  your registration is sucessfully!! visit the selected hospital for donation</p>
            </div>
@endforeach

              
    </div>
</div>

@endsection
@section('script')
    
@endsection

