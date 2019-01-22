<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    protected $fillable = [
        'name', 'email',
    ];

    protected $hidden = [
        'password',
    ];

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

}
