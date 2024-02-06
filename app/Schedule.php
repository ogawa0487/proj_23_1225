<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\room;


class Schedule extends Model
{
    public function user(){
        return $this->belongsTo('app\User');
    }

    public function room(){
        return $this->belongsTo('app\Room');
    }

}
