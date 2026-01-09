<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class WalletTransaction extends Model
{
    protected  $table = 'wallet_transaction';
    protected $fillable = [
        'wallet_id',
        'user_id',
        'pro_id',
        'amt_debit',
        'amt_credit',
        'transaction_details',
        'delete_at'
    ];
}
