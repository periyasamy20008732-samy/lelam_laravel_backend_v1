<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AdPostImggallery extends Model
{
    protected $table = 'ads_post_imggallery';
    protected $fillable = [
        'post_id',
        'image',
        'deleted_at'
    ];
}
