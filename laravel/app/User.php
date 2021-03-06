<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['email', 'password','username','fotoUrl','admin','cidade','estado'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $primaryKey = 'usuario_id';
    protected $hidden = [
        'password', 'remember_token',
    ];
    public $timestamps = false;

    public function setPasswordAttribute($password)
  {
      $this->attributes['password'] = \Hash::make($password);
  }
}
