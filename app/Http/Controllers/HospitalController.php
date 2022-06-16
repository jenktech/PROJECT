<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Donor;
use App\Models\Blood;
use App\Models\Hospital;
use App\Models\Hworker;
use App\Models\notify;
use App\Models\Region;
use App\Models\Session;
use App\Models\User;
class HospitalController extends Controller
{

    public function index()
    {  
        $sessions = Session::all();
        $sessions->load('donor');
        
        return view('hospital.index',compact('sessions'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
       
       
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Donor $donors) 
    {
        $donors->create($request->all());
    
        return redirect()->route('hospital.index')->with('success','donor registration  succecfully.');
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


    public function  edit(Request $request,  $session)
    {
        $session = Session::findOrFail($session);

        $session->load('donor');
        return view('hospital.edit', compact('session'));
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
        $session = Session::findOrFail($id);

        $request->validate([
            'diagnosis' => 'required'
        ]);
        
        $session->update([
            'hworker_id' => auth()->id(),
            'diagnosis' => $request->diagnosis,
        ]);
        
        return redirect()->route('hospital.index')->with('success','Diagnosis recorded');
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
