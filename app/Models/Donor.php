<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'middle_name','last_name','phone','tribe','gender','age', 'address',
    ];
    // public function user(){
    //    return  $this->belongsTo(User::class);
    // }
    // public function hospital(){
    //     return  $this->belongsTo(Hospital::class);
    //  }
    
}
