<?php

namespace App\Http\Controllers;
use App\Models\District;
use App\Models\Hospital;
use App\Models\Hworker;
use App\Models\Rblood;
use App\Models\Region;
use App\Models\notify;
use Illuminate\Support\Facades\Auth;
use App\Models\Donor;

Use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RbloodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       
        $record= Hospital::all();
        if(Auth::user()->hworker){
           
            $hospital = auth()->user()->hworker->hospital;
           
         
           
          
         }
      
           
       
        return view('reblood.index',compact('hospital'));
    }

    
    public function hospblood($type, $units){


        $hospitals = Hospital::where($type, '>=', $units )->pluck('name', 'id');

        return \response()->json($hospitals);

    }

    public function create()
    {
      
        return view('reblood.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,notify $notifies)
    {
        $user = auth()->user();
        $request->validate([
            'unit'=>'required',
            'phone' => 'required|digits:10|max:10|starts_with:0',
            
            
        ],[
            'age.required'=>'jaza mwaka wa kuzaliwa kwa usahihi'
        ]);
        $user->Rblood()->create($request->all());
        $notifies->create([
            'hospital_id'=>$request->hospital_id,
            'status'=>'unread'
        ]);
        return redirect()->route('hospital.index')->with('success','Request Ordered succecfully.');
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
