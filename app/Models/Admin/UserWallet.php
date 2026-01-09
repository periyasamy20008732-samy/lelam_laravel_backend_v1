<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
    protected $table = 'user_wallet';
    protected $fillable = [
        'user_id',
        'wallet_amount',
        'deleted_at'
    ];
}
