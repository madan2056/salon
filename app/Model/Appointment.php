<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Appointment extends Authenticatable
{

    protected $table = 'appointment';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'full_name',
        'email',
        'contact_number',
        'address',
        'prefered_date',
        'prefered_time',
        'submitted_at',
        'message',
    ];

}