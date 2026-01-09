<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class SupportTicketcomment extends Model
{
    protected $table = 'support_ticketcomment';
    protected $fillable = [
        'ticket_id',
        'user_id',
        'comment',
        'status',
        'deleted_at'
    ];
}
