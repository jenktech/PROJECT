<?php

namespace App\Http\Controllers;
use App\Models\Blood;
use App\Models\Donor;
use App\Models\Hospital;
use App\Models\notify;
use App\Models\Rblood;
use App\Models\Record;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BloodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $rbloods = Rblood::where('hospital_id', auth()->user()->hworker->hospital_id)->get();
        $counts = notify::where('hospital_id',Auth()->user()->hworker->hospital_id)->where('status','unread')->get();
        foreach($counts as $count)
        {
            $count->status='read';
            $count->save();
            
        }
        return view('blood.index',compact('rbloods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $rbloods = Rblood::all();
        return view('blood.edit',compact('rbloods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Record $record)
    {
      //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        
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
        $rbloods = Rblood::find($id);
        
        $recipient_hospital = auth()->user()->hworker->hospital;

        $donor_hopital  = Hospital::find($rbloods->hospital_id);
        
        DB::transaction(function () use($donor_hopital, $request, $recipient_hospital) {
            $donor_hopital->decrement($request->blood_type, $request->units);
            $recipient_hospital->increment($request->blood_type, $request->units);
        });

        return back();

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
