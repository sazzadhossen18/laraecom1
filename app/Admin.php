<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
     use Notifiable;

     protected $guard = 'admin';

    protected $fillable = [
        'name', 'type', 'mobile', 'email', 'image', 'status','password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];







}
