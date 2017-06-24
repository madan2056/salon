<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ServiceAppointmentLayout extends Authenticatable
{

    protected $table = 'service_appointment_layout';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'title','rank','status'
    ];

}