<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CustomerTestimonials extends Authenticatable
{

    protected $table = 'customer_testimonials';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'type','video_title', 'video_url','customer_name','customer_address',
        'customer_image','customer_comment','status','rank'
    ];




}