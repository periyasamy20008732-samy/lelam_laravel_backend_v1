<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class FirebaseDeviceId extends Model
{
    protected $table = 'firebase_device_id';
    protected $fillable = [
        'user_id',
        'device_id',
        'deleted_at'
    ];
}
