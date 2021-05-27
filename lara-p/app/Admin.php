<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Cat;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cats()
    {
        return $this->hasMany(Cat::class);
    }

}
