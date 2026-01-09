<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AppBanner extends Model
{
    protected $table = 'app_banner';
    protected $fillable = [
        'title',
        'image',
        'link',
        'status',
        'deleted_at'
    ];
}
