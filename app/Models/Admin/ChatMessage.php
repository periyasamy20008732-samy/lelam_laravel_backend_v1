<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    protected $table = 'chat_message';
    protected $fillable = [
        'chat_room_id',
        'user_id_from',
        'user_id_to',
        'message',
        'if_gift',
        'image',
        'chat_coin',
        'notify_user_from',
        'notify_user_to',
        'chat_from',
        'status',
        'deleted_at'
    ];
}
