<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AppSettings extends Model
{
    protected $table = 'app_settings';
    protected $fillable = [
        'inner_post_image',
        'deleted_at'
    ];
}
