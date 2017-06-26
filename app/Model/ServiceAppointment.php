<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ServiceAppointment extends Authenticatable
{

    protected $table = 'appointment_service';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'service_id',
        'appointment_id',
        'service_title',
        'service_pricing_title',
        'service_pricing_cost',

    ];

}