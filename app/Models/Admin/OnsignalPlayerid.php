<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class OnsignalPlayerid extends Model
{
    protected $table = 'onsignal_playerid';
    protected $fillable = [
        'user_id',
        'playerId',
        'deleted_at'
    ];
}
