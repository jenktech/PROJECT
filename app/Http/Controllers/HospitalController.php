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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        
       
        $donors = Donor::all();
        //  if(Auth::user()->hworker){
           
        //     $hospital = auth()->user()->hworker->hospital;
        //     $notifies = notify::where('hospital_id',Auth::user()->hworker->hospital_id)->where('status','unread')->count();
                
           
           
        //     return view('hospital.index',compact('hospital','notifies','donors'));
          
        //  }
            $sessions = Session::all();
        
  
         return view('hospital.index',compact('donors','sessions'));
        
      
            
        
        
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function  edit(Request $request)
    {
       $data =  $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'phone' => 'required|digits:10|starts_with:0',
            'payment_method' => 'required',
            'insurance_company' => 'nullable|required_if:payment_method,2',            
            'card_number' => 'nullable|required_if:payment_method,2', 
            'complaint' => 'required',
            'hworker_id' => 'nullable|required_if:payment_method,2'
        ]);

        $donor = Donor::where('phone', $data['phone'])->firstOrFail();

        $donor->session()->create([
            'complaint' => $data['complaint'],
            'payment_method' => $data['payment_method'],
            'insurance_company' => $data['insurance_company'],
            'card_number' => $data['card_number'],
            'status' => 'On Progress',
        ]);

        return redirect()->route('hospital.index')->with('success', 'Session Started');
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
       
        $donors=Donor::find($id);
        $donors->weight = $request->weight;
        $donors->blood_pressure = $request->blood_pressure;
        $donors->blood_type = $request->blood_type;
        $donors->save();

        $hospital = Hospital::find($request->hospital_id);
        
        $hospital->increment($request->blood_type, 450);
        

        return redirect()->route('hospital.create');
       
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
