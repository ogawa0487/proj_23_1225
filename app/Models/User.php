<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Follow;
use App\Models\Message;
use App\Models\Schedule;
use App\Models\Shift;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\Department;

class User extends Authenticatable
{
    use Notifiable;

    public function follows(){
        return $this->belongsToMany(Follow::class);
    }

     public function messages(){
        return $this->belongsToMany(Message::class);
     }

     public function schedules(){
        return $this->hasMany(Schedule::class);
     }

     public function shifts(){
        return $this->hasMany(Shift::class);
     }

     public function cart_items(){
        return $this->hasMany(CartItem::class);
     }

     public function orders(){
        return $this->hasMany(Order::class);
     }

     public function department(){
        return $this->hasOne(Department::class)
     }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
