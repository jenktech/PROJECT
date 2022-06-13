<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function generate($id)
    {
        $records = Hospital::all();
        $pdf = PDF::loadView('pdf.document',compact('detail','suggestion',))
        return $pdf->dowload(); 
    }
}
