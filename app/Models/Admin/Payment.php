<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';
    protected $fillable = [
        'user_id',
        'subscription_id',
        'amount',
        'payment_status',
        'gateway',
        'payment_id',
        'deleted_at'
    ];
}
