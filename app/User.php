<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['id','name','document','nro_document','address','telephone','email','image','switch', 'password','user','id_roles'];
    protected $hidden = ['password', 'remember_token',];
    public function role()
    {
        return $this->belongsto('App\Role');
    }
    protected $casts = ['email_verified_at' => 'datetime',];
}
