<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Ads_filter_post extends Model
{
    protected $table = 'ads_filter_post';
    protected $fillable = [
        'attribute_id',
        'attribute_variations_id',
        'ads_post_id',
        'deleted_at'
    ];
}
