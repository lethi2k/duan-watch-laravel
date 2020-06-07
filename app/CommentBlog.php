<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentBlog extends Model
{
    protected $table = "comment_blog";
    public $timestamps = false;

    public function Blog(){
        return $this->belongsTo('App\BlogModel', 'idbl', 'id');
    }

    public function User(){
        return $this->belongsTo('App\User', 'user', 'id');
    }
}
