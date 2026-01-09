<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Clock extends Model
{
    protected $table = 'clock';
    protected $fillable = [
        'name',
        'value',
        'deleted_at'
    ];
}
