<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CartItem;
use App\Order;


class Product extends Model
{
     public function cart_times(){
        return $this->hasMany('app\CartItem');
     }

     public function orders(){
        return $this->hasMany('app\Orders');
     }
}
