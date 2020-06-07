<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillModel extends Model
{
    protected $table = "Bill";
    public $timestamps = false;

    public function Oder(){
        return $this->belongsTo('App\OrderModel', 'idoder', 'id');
    }

    public function Company(){
        return $this->belongsTo('App\CompanyModel', 'idct', 'id');
    }
}
