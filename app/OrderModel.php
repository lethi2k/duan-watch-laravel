<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OderModel extends Model
{
    protected $table = "order";

    public function Bill(){
        return $this->belongsTo('App\BillModel', 'id_oder', 'id');
    }

    public function Product(){
        return $this->belongsTo('App\ProductModel', 'product_id', 'id');
    }
   
}
