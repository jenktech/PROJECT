<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function user(){
        return  $this->belongsTo(User::class);
     }
     public function district()
     {
         return $this->hasMany(District::class);
     }
}

