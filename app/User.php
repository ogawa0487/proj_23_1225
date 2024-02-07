<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public function follows(){
        return $this->belongsToMany('app\Follow');
    }

     public function messages(){
        return $this->belongsToMany('app\Messages');
     }

     public function schedules(){
        return $this->hasMany('app\Schedules');
     }

     public function shifts(){
        return $this->hasMany('app\Shifts');
     }

     public function cart_items(){
        return $this->hasMany('app\CartItem');
     }

     public function orders(){
        return $this->hasMany('app\Orders');
     }

     public function department(){
        return $this->hasOne('app\Department');
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
