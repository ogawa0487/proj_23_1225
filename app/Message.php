<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Message extends Model
{
    public function users(){
        return $this->hasMany('app\User');
    }
}
