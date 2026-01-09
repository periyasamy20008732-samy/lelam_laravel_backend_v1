<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class LoginLogs extends Model
{
    protected $table = 'login_logs';
    protected $fillable = [
        'user_id',
        'ip_address',
        'login_time',
        'logout_time',
        'location_address',
        'user_agent',
        'city',
        'region',
        'country',
        'org',
        'latitude',
        'longitude',
        'deleted_at'
    ];
}
