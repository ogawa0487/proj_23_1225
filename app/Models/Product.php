<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CartItem;
use App\Models\Order;


class Product extends Model
{
     public function cart_times(){
        return $this->hasMany(CartItem::class);
     }

     public function orders(){
        return $this->hasMany(Order::class);
     }
}
