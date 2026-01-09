<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $table = 'brands';
    protected $fillable = [
        'slug',
        'category_id',
        'name',
        'image',
        'status',
        'deleted_at'
    ];
}
