<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pages';
    protected $fillable = [
        'title',
        'link',
        'options',
        'details',
        'if_auction_terms',
        'showapp_menu',
        'publish_status',
        'deleted_at'
    ];
}
