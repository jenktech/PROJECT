<?php

namespace App\Http\Controllers;
use App\Models\District;
use App\Models\Hospital;
use App\Models\Hworker;
use App\Models\Region;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class HworkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('location.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
        $regions = Region::all();
        return view('hworker.create',compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,Hworker $hworkers)
    {   
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            
            'last_name' => 'required',
            'phone_no'=>'required|',
             'user_name'=>'required|',
           
            
        ],[
            'name'=>' name already exist'
        ]);
       DB::transaction(function () use($hworkers, $request){
        // $hospital = Hospital::create(['name' => $request->name, 'district_id' => $request->district_id, 'A' => $request->A, 'B' => $request->B,'Bn' => $request->Bn,'AB' => $request->AB,'O' => $request->O,'On' => $request->On,'An' => $request->An,'ABn' => $request->ABn]);
        
        // Hworkers::create(['first_name' => $request->first_name, 'middle_name'=> $request->middle_name,'last_name'=> $request->last_name,'user_name'=> $request->user_name,'phone_no'=> $request->phone_no,'user_id' => auth()->id()]);
        
       });
       Hworker::create($request->all());
      
        return redirect()->route('hospital.index')->with('success',' registration  succecfully.');
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
