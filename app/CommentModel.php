<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    protected $table = "comment";
    public $timestamps = false;

    public function User(){
        return $this->belongsTo('App\User', 'user', 'id');
    }

    public function Product(){
        return $this->belongsTo('App\ProductModel', 'product_id', 'id');
    }
}
