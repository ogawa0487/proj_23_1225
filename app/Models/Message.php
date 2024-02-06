<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Message extends Model
{
    public function users(){
        return $this->belongsToMany(User::class)
    }
}
