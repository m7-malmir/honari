<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = ['username', 'email', 'password'];

    protected $hidden = ['password']; // مخفی کردن رمز عبور در خروجی JSON

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value); // هش کردن رمز
    }
}

