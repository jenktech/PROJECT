<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Hospital;
use App\Models\Region;
use App\Models\User;
use App\Models\Rblood;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\DB;
class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usars = User::where('role_id',3)->get();
        $usars=count($usars);
        
    
        $users = User::where('role_id',2)->get();
        $users=count($users);
        $jumla = $users + $usars;
       
        $hospital = Hospital::sum('A');
        $hospitalb = Hospital::sum('B');
        $hospitalbn = Hospital::sum('Bn');
        $hospitalab = Hospital::sum('AB');
        $hospitalon = Hospital::sum('On');
        $hospitalo = Hospital::sum('O');
        $hospitalabn = Hospital::sum('ABn'); 
        $hospitalon = Hospital::sum('On');
        $hospitalan = Hospital::sum('An');
         $regions = Region::all();
        $regions=count($regions);
        $districts = District::all();
      
        $districts=count($districts);
      
        $rbloods=Rblood::sum('unit');
        $rbloodA= Rblood::all()
                            ->where('blood_type','A')
                             ->sum('unit');
                            
      
        $rbloodB= Rblood::all()
        ->where('blood_type','B')
         ->sum('unit');
        
                    
                      $rbloodBn= Rblood::all()
                      ->where('blood_type','Bn')
                       ->sum('unit');

                     
                      $rbloodAB= Rblood::all()
                      ->where('blood_type','AB')
                       ->sum('unit');

                     
                      
                      $rbloodABn= Rblood::all()
                      ->where('blood_type','ABn')
                       ->sum('unit');

                      
                      
                      $rbloodAn= Rblood::all()
                      ->where('blood_type','An')
                       ->sum('unit');
                       $rbloodO= Rblood::all()
                       ->where('blood_type','O')
                        ->sum('unit');

                      $rbloodOn= Rblood::all()
                      ->where('blood_type','On')
                       ->sum('unit');

                     
        $records= Hospital::all();
        
        return view('location.index',compact('hospital','jumla','usars','rbloodOn','rbloodAB','rbloodABn','rbloodAn','rbloodA','rbloodB','rbloodBn','rbloodO','districts','users','regions','hospitalb','hospitalab','hospitalbn','hospitalon','hospitalo','hospitalabn','hospitalan'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $regions = Region::all();
        return view('location.create',compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,District $district)
    {     
        
        $district->create($request->all()); 
        
        return back()->with('success','district registered succecfully.');
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
