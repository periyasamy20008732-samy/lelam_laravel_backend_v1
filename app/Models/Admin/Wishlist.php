<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlist';
    protected $fillable = [
        'user_id',
        'post_id',
        'delete_at'
    ];
}
