<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OderModel extends Model
{
    protected $table = "order";

    public function Product(){
        return $this->belongsTo('App\ProductModel', 'product_id', 'id');
    }
   
}
