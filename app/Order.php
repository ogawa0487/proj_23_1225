<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
        return $this->belongsTo('app\User');
    }

    public function product(){
        return $this->belongsTo('app\Product');
    }
}
