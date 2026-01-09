<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Ad_post extends Model
{
    //
    protected $fillable = [
        'title',
        'image',
        'status',
        'slug',
        'category_id',
        'model',
        'model_variation',
        'price',
        'description',
        'price',
        'if_offer_price',
        'offer_price',
        'auction_price_intervel',
        'auction_starting_price',
        'attribute_id',
        'attribute_variations_id',
        'filters',
        'latitude',
        'longitude',
        'user_zone_id',
        'parent_zone_id',
        'zone_id',
        'land_mark',
        'if_auction',
        'auction_status',
        'auction_startin',
        'auction_endin',
        'auction_attempt',
        'admin_approval',
        'if_finance',
        'if_exchange',
        'feature',
        'status',
        'visiter_count',
        'if_sold',
        'if_expired',
        'if_verifyed',
        'by_dealer',
        'by_dealer',
        'created_by',
        'posted_on',
        'deleted_at'
    ];
}
