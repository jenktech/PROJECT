<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\Donor;
use App\Models\Hospital;
use App\Models\Hworker;
use App\Models\Rblood;
use App\Models\Region;
use App\Models\User;
use PDF;
use file;
use image;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $users = User::where('role_id',3)->get();
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
        
        
        $records= Hospital::all();
        if(Auth::user()->hworker){
           
            $hospital = auth()->user()->hworker->hospital;
           
      
           
          
         }
      
         foreach($records as $record){
            //  dd($record->donors->sum('hospital_id'));
            
         }
              
    
         $donors = Donor::all();
         
      
         
          
      
       
   
       
        return view('post.index',compact('users','user','hospitals','rbloods','records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,Post $posts){
       
        if($request->hasFile('image_path')){
             $newImageName = uniqid() .'-'.$request->image_path->extension();
          
              
             $request->image_path->move('/storage/images/', $newImageName);
             Post::create([
                'news'=>$request->input('news'),
                'title'=>$request->input('title'),
                'image_path'=>$newImageName,
               
            ]);
           
            }else{
                Post::create([
                    'news'=>$request->input('news'),
                    'image_path'=>'no_image',
    
                ]);
         
            }
           
   
        return redirect()->route('hospital.index')->with('success','post  created succecfully.');
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
