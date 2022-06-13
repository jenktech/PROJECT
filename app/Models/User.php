<?php

namespace App\Models;
use App\Notifications\OffersNotification; 
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Donor;
use App\Models\Role;
use App\Models\Blood;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'role_id',
        'donor_id',
        'password',
    ];
  

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function donor()
    {
        return $this->hasOne(Donor::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function blood(){
        return $this->hasOne(Blood::class);
    }

    public function hworker(){
        return $this->hasOne(Hworker::class);
    }

    public function region()
    {
        return $this->hasMany(Region::class);
    }
    public function hospital()
    {
        return $this->hasOne(Hospital::class);
    }
    public function Rblood()
    {
        return $this->hasMany(Rblood::class);
    }
    public function records()
    {
        return $this->hasOne(Record::class);
    }
    public function notifies()
    {
        return $this->hasOne(notifies::class);
    }
}

