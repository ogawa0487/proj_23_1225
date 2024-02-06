<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Follow extends Model
{
        public function users(){
        return $this->belongsToMany('app\User');
    }
}
