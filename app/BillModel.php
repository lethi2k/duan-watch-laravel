<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillModel extends Model
{
    protected $table = "order_detail";
    public $timestamps = false;

    public function User(){
        return $this->belongsTo('App\User', 'user', 'id');
    }

    public function Order(){
        return $this->belongsTo('App\OderModel', 'id_oder', 'id');
    }
}
