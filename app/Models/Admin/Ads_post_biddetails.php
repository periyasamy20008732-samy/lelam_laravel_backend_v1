<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Ads_post_biddetails extends Model
{
    protected $table = 'ads_post_biddetails';
    protected $fillable = [
        'ads_post_id',
        'user_id',
        'if_auction_end',
        'status',
        'deleted_at',
        'customerbid_id',
        'user_mobile',
        'if_auction',
        'if_agree_bid_meeting',
        'if_reject_bid',
        'amount',
        'remark',
        'if_admin_dumb',
        'admin_dumb_username',
    ];
}
