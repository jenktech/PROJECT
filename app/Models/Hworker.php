<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hworker extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'user_id','district_id','first_name','last_name','middle_name','phone_no','user_name',
    ];
    public function user(){
        return  $this->belongsTo(User::class);
     }

     public function hospital(){
        return  $this->belongsTo(Hospital::class);
     } public function session()
     {
         return $this->belongsTo(Session::class);
     }
      
}
