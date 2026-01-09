<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
    protected $table = 'zones';
    protected $fillable = [
        'slug',
        'parent_id',
        'name',
        'image',
        'description',
        'latitude',
        'longitude',
        'popular',
        'status',
        'allstore_onoff',
        'delete_at'
    ];
}
