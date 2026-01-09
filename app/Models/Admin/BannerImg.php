<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class BannerImg extends Model
{
    protected $table = 'banner_img';
    protected $fillable = [
        'title',
        'banner_img',
        'link',
        'view_on',
        'status',
        'deleted_at'
    ];
}
