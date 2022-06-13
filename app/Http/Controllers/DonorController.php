<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Donor;
use App\Models\Hospital;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $donors = Donor::where('user_id',Auth::user()->id)->get();
       
        return view('donor.index',compact('donors'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function region($region)
    {
        $districts = District::where('region_id', $region)->pluck('name', 'id');
       
        return \response()->json($districts);
    }

    public function district($district)
    {
        $centres = Hospital::where('district_id', $district)->pluck('name', 'id');
       
        return \response()->json($centres);
    }

    public function create()
    {
        $regions = Region::all();
        return view('donor.create', compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {     
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'age' => 'required|max:65|num',
            'gender' => 'required',
            'phone' => 'required|digits:10|max:10|starts_with:0',
            'address' => 'required',
            'tribe' => 'required',
            
            'age' => 'required|max:2',
            
        ],[
            'age.required'=>'jaza mwaka wa kuzaliwa kwa usahihi'
        ]);
        //   dd($request->middle_name);
          Donor::create($request->all());
          return redirect()->route('home')->with('success',' Congratulation your registration  succecfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

