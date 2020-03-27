<?php

namespace App\Http\Controllers\Backend\Modules\Article\Model;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $fillable = [
        'name','slug','images', 'desciption'
    ];

    public function items(){
        return $this->hasMany(Item::class);
    }
}
