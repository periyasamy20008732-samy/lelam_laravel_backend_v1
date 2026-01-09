<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AuctionTerms extends Model
{
    protected $table = 'auction_terms';
    protected $fillable = [
        'user_id',
        'post_id',
        'status',
        'deleted_at'
    ];
}
