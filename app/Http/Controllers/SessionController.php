<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function store(Request $request)
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

        return redirect()->route('reception.index')->with('success', 'Session Started');
    }
}
