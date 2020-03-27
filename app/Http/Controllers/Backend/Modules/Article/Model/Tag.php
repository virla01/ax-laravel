<?php

namespace App\Http\Controllers\Backend\Modules\Article\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name','slug'
    ];

    public function items(){
        return $this->belongsToMany(Item::class);
    }
}
