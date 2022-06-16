<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'middle_name', 'last_name', 'gender', 'age', 'payment_method', 'insurance_company', 'card_number', 'complaint', 'hworker_id', 'weight','blood_pressure','height','status'];
    public function hworker()
    {
        return $this->belongsTo(Hworker::class);
    }
    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }
}
