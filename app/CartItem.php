<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{

    protected $table = 'cart_items';

    public function user(){
        return $this->belongsTo('app\User');
    }

    public function product(){
        return $this->belongsTo('app\Product');
    }
}
