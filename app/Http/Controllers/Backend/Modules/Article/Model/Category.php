<?php

namespace App\Http\Controllers\Backend\Modules\Article\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name','slug','description','images'
    ];

    public function items(){
        return $this->hasMany(Item::class);
    }
}
