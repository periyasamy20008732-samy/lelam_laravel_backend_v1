<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Ads_post_customerbid extends Model
{
    protected $table = 'ads_post_customerbid';
    protected $fillable = [
        'post_id',
        'user_id',
        'if_auction',
        'status',
        'deleted_at',
        'if_auction_end',
    ];
}
