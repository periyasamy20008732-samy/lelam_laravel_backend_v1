<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class UsersSubscriptionHistory extends Model
{
    protected $table = 'users_subscription_history';
    protected $fillable = [
        'user_id',
        'subscription_id',
        'price',
        'validity',
        'status',
        'deleted_at'
    ];
}
