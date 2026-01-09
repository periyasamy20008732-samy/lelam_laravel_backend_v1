<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class MeetingLog extends Model
{
    protected $table = 'meeting_log';
    protected $fillable = [
        'meeting_id',
        'post_id',
        'seller_id',
        'buyer_id',
        'action ',
        'remark',
        'status',
        'deleted_at'
    ];
}
