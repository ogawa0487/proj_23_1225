<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
     public function cart_times(){
        return $this->hasMany('app\CartItem');
     }

     public function orders(){
        return $this->hasMany('app\Orders');
     }
}
