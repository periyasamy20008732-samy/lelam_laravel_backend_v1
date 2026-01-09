<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class RefundRequest extends Model
{
    protected $table = 'refund_request';
    protected $fillable = [
        'user_id',
        'bid_id',
        'amount',
        'notification_status',
        'status',
        'deleted_at'
    ];
}
