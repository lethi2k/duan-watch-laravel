<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = "product";
    

    public function ShowImages(){
        return $this->hasMany('App\ImagesModel', 'idsp', 'id');
    }

    public function Category(){
        return $this->belongsTo('App\CateProductModel', 'cate_id', 'id');
    }

    public function Trademark(){
        return $this->belongsTo('App\CategoryProductModel', 'category_trade', 'id');
    }
    
}
