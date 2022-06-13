<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Model\Role;
use App\Models\District;
use App\Models\Donor;
use App\Models\Hospital;
use App\Models\Region;
use App\Models\notify;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hworker){
           
            $hospital = auth()->user()->hworker->hospital;
            $notifies = notify::where('hospital_id',Auth::user()->hworker->hospital_id)->where('status','unread')->count();
                
     
           
            return view('admin.index',compact('hospital','notifies'));
        
    
    }}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
         public function create()
            {     $districts = District::all();
        return view('admin.create',compact('districts'));
            }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,Region $regions)
    {     $request->validate([
        'name' => 'required'
        
        
    
        ]);
        $regions->create($request->all());
        return back()->with('success','Region registered successfull');
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
