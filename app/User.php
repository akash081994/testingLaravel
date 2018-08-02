<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

      public function account()
      {
         return $this->hasOne('App\Account','foreign_key');
      }

      public function orders(){
        return $this->hasMany(Order::class);

         // return $this->hasMany('App\Order', 'foreign_key', 'local_key');
    }
}
