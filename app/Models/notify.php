<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notify extends Model
{
    use HasFactory;
    protected  $fillable =[
        'hospital_id',
        'status'
    ];
    public function user(){
        $this->belongsTo(User::class);
    }
}
