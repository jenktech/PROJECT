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
            'last_name' => 'required',
            'A' => 'required|max:7000|numeric',
            'B' => 'required|max:7000|numeric',
            'AB' => 'required|max:7000|numeric',
            'An' => 'required|max:7000|numeric',
            'Bn' => 'required|max:7000|numeric',
            'On' => 'required|max:7000|numeric',
            'O' => 'required|max:7000|numeric',
            'ABn' => 'required|max:7000|numeric',
             'name'=>'required|',
           
            
        ],[
            'name'=>' name already exist'
        ]);
       DB::transaction(function () use($hworkers, $request){
        $hospital = Hospital::create(['name' => $request->name, 'district_id' => $request->district_id, 'A' => $request->A, 'B' => $request->B,'Bn' => $request->Bn,'AB' => $request->AB,'O' => $request->O,'On' => $request->On,'An' => $request->An,'ABn' => $request->ABn]);

        $hospital->hworker()->create(['first_name' => $request->first_name, 'last_name'=> $request->last_name,'user_id' => auth()->id()]);
        
       });
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
