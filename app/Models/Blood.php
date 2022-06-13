<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    use HasFactory;
    protected $fillable=['weight','blood_pressure','blood_type','user_id'
        
];
public function user(){
    return $this->belongsTo(User::class);
}
}
