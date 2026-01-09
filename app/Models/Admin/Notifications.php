<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $table = 'notifications';
    protected $fillable = [
        'user_id',
        'created_by',
        'title',
        'msg',
        'product_data',
        'status',
        'deleted_at'
    ];
}
