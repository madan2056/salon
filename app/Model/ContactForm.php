<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ContactForm extends Authenticatable
{

    protected $table = 'contact_form';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'id', 'full_name', 'viewed_by_admin', 'service_id', 'email','phone_number','address','quantity','detail','type'
    ];
}
