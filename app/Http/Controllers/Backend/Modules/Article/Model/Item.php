<?php

namespace App\Http\Controllers\Backend\Modules\Article\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Http\Controllers\Backend\Modules\Article\Model\Tag;
use App\Http\Controllers\Backend\Modules\Article\Model\Category;
use App\Http\Controllers\Backend\Modules\Article\Model\Source;
use App\Http\Controllers\Backend\Modules\Article\Model\Author;

class Item extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'user_id', 'category_id', 'source_id', 'author_id', 'title', 'alias', 'published','introtext','fulltext', 'imageintro', 'imageintro_title', 'imageintro_img', 
        'imageintro_caption', 'imageintro_credits', 'image','image_img','image_caption', 'image_credits', 'imagegallery', '	imagegallery_img', 'imagegallery_caption',
        'imagegallery_credits', 'video', 'video_vid', 'video_caption', 'video_credits', 'audio', 'audio_aud', 'audio_caption', 'audio_credits', 'publish_up', 
        'publish_down', 'trash', 'access', 'features', 'featured_ordering', 'hits', 'meta_decription', 'meta_key', 'meta_author'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function item(){
        return $this->belongsTo(Item::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function source(){
        return $this->belongsTo(Source::class);
    }

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

}
