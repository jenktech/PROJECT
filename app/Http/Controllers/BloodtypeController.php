<?php

namespace App\Http\Controllers;

use App\Charts\Test;
use App\Models\Hospital;
use App\Http\Controllers\larapexchart;
use App\Models\Post;
use App\Models\Rblood;
use ArielMejiaDev\LarapexCharts\BarChart;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart as FacadesLarapexChart;
use ArielMejiaDev\LarapexCharts\LarapexChartsServiceProvider;
use Illuminate\Http\Request;

class BloodtypeController extends Controller
{   
    public function index(Test $test){
      $posts = Post::all();
     $hospital = Hospital::all();
      // $test = new BarChart();
      // $test->setTitle('Juma vs Said')
      //       ->setSubtitle('Kwendraa')
      //       ->addData('Juma', [1, 3, 5, 7])
      //       ->addData('Said', [2, 4, 6, 8])
      //       ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr']);
      // dd($test->cdn());
      return view('graph.index',compact('posts','hospital'));
    }

    public function minus($id){
      
      $rblood = Rblood::findOrFail($id);
      $rblood->confirmed = 1;
      $rblood->save();
      
      $hospital = Hospital::findOrFail($rblood->hospital_id);
      $blood_type = $rblood->blood_type;
      $hospital->$blood_type = $hospital->$blood_type - $rblood->unit;
      $hospital->save();
      return back();
          
      
    }
   
}
