<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class BrandsModelVariations extends Model
{
    protected $table = 'brands_model_variations';
    protected $fillable = [
        'slug',
        'brand_id',
        'brand_model_id',
        'name',
        'image',
        'status',
        'deleted_at'
    ];
}
