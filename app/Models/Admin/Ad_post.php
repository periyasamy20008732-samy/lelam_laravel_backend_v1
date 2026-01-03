<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Ad_post extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
    ];
}
