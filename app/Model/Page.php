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
       'id', 'title1','slug','image', 'description', 'page_type','status','rank','parent_id'

    ];

   public function pages(){
        return $this->hasMany(Page::class, 'parent_id');
    }
    
}