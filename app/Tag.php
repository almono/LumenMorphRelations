<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = [
        'name', 'email',
    ];

    protected $hidden = [
        'password',
    ];

    public function photos()
    {
        return $this->morphedByMany('App\Photo', 'taggable');
    }

    public function videos()
    {
        return $this->morphedByMany('App\Video', 'taggable');
    }
}
