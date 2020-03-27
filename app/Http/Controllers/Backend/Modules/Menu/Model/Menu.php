<?php

namespace App\Http\Controllers\Backend\Modules\Menu\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name', 'slug', 'url', 'icon','description','parent', 'enabled', 'order', 'client', 'access', 'meta_description','meta_key','meta_author'
    ];

}
