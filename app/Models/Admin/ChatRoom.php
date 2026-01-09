<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    protected $table = 'chat_room';
    protected $fillable = [
        'chat_uniq_id',
        'user_id_from',
        'user_id_to',
        'chat_rate_id',
        'chat_rate',
        'notify_user_id_from',
        'notify_user_id_to',
        'notifi_admin',
        'created_by',
        'status',
        'deleted_at'
    ];
}
