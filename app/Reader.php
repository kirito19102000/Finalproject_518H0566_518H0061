<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Blogger extends Authenticatable
{
    use Notifiable;

    protected $guard = 'reader';

    protected $fillable = [
        'fullname', 'username', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}