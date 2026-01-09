<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    protected $table = 'support_ticket';
    protected $fillable = [
        'uniq_id',
        'userid',
        'mobile',
        'subject',
        'msg',
        'status',
        'remark',
        'notifi_admin',
        'deleted_at'
    ];
}
