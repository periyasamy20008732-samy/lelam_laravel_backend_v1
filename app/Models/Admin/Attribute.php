<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attribute';
    protected $fillable = [
        'name',
        'slug',
        'list_order',
        'category_id',
        'form_validation',
        'if_details_icons',
        'details_icons',
        'details_icons_order',
        'show_filter',
        'status',
        'deleted_at'
    ];
}
