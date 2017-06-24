<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ProfileSetting extends Authenticatable
{

    protected $table = 'site_profile';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'company_name', 'email', 'address', 'facebook_link', 'logo'
    ];

}