<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    protected $table = 'apis';
    protected $fillable = [
        'token',
        'status',
        'deleted_at'
    ];
}
