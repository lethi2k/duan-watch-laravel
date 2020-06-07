<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    protected $table = "blog";
    public $timestamps = false;

    public function CateBlog(){
        return $this->belongsTo('App\CategoryBlogModel', 'cate_id', 'id');
    }

    public function User(){
        return $this->belongsTo('App\User', 'user', 'id');
    }
}
