<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AttributeVariations extends Model
{
    protected $table = 'attribute_variations';
    protected $fillable = [
        'attribute_id',
        'name',
        'status',
        'deleted_at'
    ];
}
