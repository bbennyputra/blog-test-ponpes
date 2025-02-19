<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'content',
        'image',
        'thumbnail',
        'category_id',
        'users_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tag', 'posts_id', 'tags_id');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function ratings()
    {
        return $this->hasMany('App\Rating', 'posts_id');
    }
}
