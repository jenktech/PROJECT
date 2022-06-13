<?php

namespace App\Listeners;
use App\Models\User;
use App\Models\Roles;
use App\Notifications\NewUserNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
 use App\Listeners\Notification;
use Illuminate\Support\Facades\Notification as FacadesNotification;

class SendNewsUserNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function handle($event)
    {
        $admins = User::whereHas('roles',function($query){
            $query->where('id',1);
        })->get(); 
        FacadesNotification::send($admins,new NewUserNotification($event->user));
    }}

 
