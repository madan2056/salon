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

    public function services()
    {
        return $this->belongsToMany('App\Model\OurService',
            'service_service_appointment_layout', 'service_appointment_layout_id', 'service_id');
    }

}