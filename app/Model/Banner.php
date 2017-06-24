<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Banner extends Authenticatable
{

    protected $table = 'banner';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'title2', 'image', 'status','rank', 'link', 'link_button_text'
    ];

}
