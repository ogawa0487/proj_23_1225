<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function user(){
        return $this->belongsTo('app\User');
    }
}
