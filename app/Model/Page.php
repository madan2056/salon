<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Page extends Authenticatable
{

    protected $table = 'page';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'title1','slug','image', 'short_description', 'description', 'page_type','status','rank','parent_id', 'show_in_menu'

    ];

   public function pages(){
        return $this->hasMany(Page::class, 'parent_id');
    }
    
}