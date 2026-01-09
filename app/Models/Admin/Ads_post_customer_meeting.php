<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Ads_post_customer_meeting extends Model
{
    protected $table = 'ads_post_customer_meeting';
    protected $fillable = [
        'user_id',
        'post_id',
        'with_bid',
        'bid_id',
        'bid_amount',
        'meeting_date',
        'meeting_time',
        'if_location_request',
        'latitude',
        'longitude',
        'location_link',
        'location_request_count',
        'seller_approvel',
        'admin_approvel',
        'status',
        'meeting_done',
        'if_junk',
        'if_reschedule',
        'if_skipped',
        'if_not_intersect',
        'if_revisit',
        'if_decisionpedding',
        'if_expired',
        'if_cancel',
        'if_sold',
        'if_reject_bid',
        'price_offered',
        'deleted_at'
    ];
}
