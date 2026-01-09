<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
    protected $table = 'user_level';
    protected $fillable = [
        'name',
        'level',
        'deleted_at'
    ];
}
