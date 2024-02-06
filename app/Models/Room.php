<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule;

class Room extends Model
{
    public function schedules(){
        return $this->hasMany(Schedule::class)
    }
}
