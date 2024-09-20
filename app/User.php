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
    protected $fillable = [
        'title', 'name', 'lastName', 'phone', 'address', 'email', 'password',  'type', 'status', 'profileImage',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}


// <!--
// ***********************************************************
// * ******************************************************* *
// * * Author: Rahmatullah Bizhan                          * *
// * * Email: rahmatullahbizhan@gmail.com                  * *
// * * Please Kindly Report any error or bug you may face. * *
// * * Contact me if you have any questions :)             * *
// * ******************************************************* *
// ***********************************************************
// -->
