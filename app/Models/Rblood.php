<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rblood extends Model
{
    use HasFactory;
    protected $fillable =[
        'unit','blood_type','hospital_id','user_id','phone',
    ];
    public function user(){
        return  $this->belongsTo(User::class);
     }
     public function hospital(){
        return  $this->belongsTo(Hospital::class);
     }
}
