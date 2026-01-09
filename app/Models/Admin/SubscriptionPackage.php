<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPackage extends Model
{
    protected $table = 'subscription_package';
    protected $fillable = [
        'parent_id',
        'slug',
        'name',
        'image',
        'if_ads',
        'no_ads',
        'if_options',
        'validity',
        'package_validity',
        'price',
        'show_app_web',
        'status',
        'if_delete',
        'if_dealer',
        'deleted_at'
    ];
}
