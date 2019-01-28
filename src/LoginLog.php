<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginLog extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'attempt_username',
        'ip_address',
        'intended_uri',
        'login_attempt_unix_time',
        'logout_attempt_unix_time'
    ];
}
