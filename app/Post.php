<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'author_id'
    ];

    protected $timestamps = true;

    public function Author(){
        return $this->belongsTo('User', 'author_id');
    }
}
