<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schedule;

class Room extends Model
{
    public function schedules(){
        return $this->hasMany('app\Schedule');
    }
}
