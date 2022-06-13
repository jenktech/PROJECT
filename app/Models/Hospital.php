<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','district_id', 'A','B','AB','An','Bn','On','O','ABn',
    ];

    public function district(){
        return $this->belongsTo(District::class);
    }

    public function hworker(){
        return $this->hasMany(Hworker::class);
    }
    public function Rblood(){
        return $this->hasMany(Rblood::class);
    }
    public function donors(){
        return $this->hasMany(Donor::class);
    }
   
}
