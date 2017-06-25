<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class OurService extends Authenticatable
{

    protected $table = 'our_service';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'title','slug','image', 'short_description', 'description', 'status','rank'

    ];




}