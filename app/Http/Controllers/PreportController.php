<?php

namespace App\Http\Controllers;


use App\Models\Donor;
use App\Models\Hospital;
use App\Models\Hworker;
use App\Models\Rblood;
use App\Models\Region;
use App\Models\User;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $users = User::where('role_id',3)->get();
        $users=count($users);
        $user = User::where('role_id',2)->get();
        $user=count($user);
        $hospitals = Hospital::sum('A');
        $hospitals = Hospital::sum('B');
        $hospitals = Hospital::sum('AB');
        $hospitals = Hospital::sum('On');
        $hospitals = Hospital::sum('O');
        $hospitals = Hospital::sum('ABn'); 
        $hospitals = Hospital::sum('On');
        $hospitals = Hospital::sum('An');
        $rbloods=Rblood::sum('unit');
    
       
       
        return view('report.index',compact('users','user','hospitals','rbloods'));
 
        
    
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
