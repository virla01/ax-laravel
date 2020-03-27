<?php

namespace App\Http\Controllers\Backend\Modules\Article\Model;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name','slug','description','images', 'email', 'social'
    ];

    public function items(){
        return $this->hasMany(Item::class);
    }
}
