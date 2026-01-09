<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'slug',
        'name',
        'order_level',
        'image',
        'featured',
        'visiter_count',
        'status',
        'deleted_at'
    ];
}
