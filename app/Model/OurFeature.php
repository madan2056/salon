<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class OurFeature extends Authenticatable
{

    protected $table = 'our_feature';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'title','image', 'short_desc', 'description', 'status','rank', 'slug'

    ];


}