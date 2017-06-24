<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ServicePricing extends Authenticatable
{

    protected $table = 'service_pricing';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'service_id','title','rank', 'cost'

    ];

}