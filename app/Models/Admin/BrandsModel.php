<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class BrandsModel extends Model
{
    protected $table = 'brands_model';
    protected $fillable = [
        'brand_id',
        'slug',
        'name',
        'image',
        'status',
        'deleted_at'
    ];
}
