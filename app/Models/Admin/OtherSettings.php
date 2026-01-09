<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class OtherSettings extends Model
{
    protected $table = 'other_settings';
    protected $fillable = [
        'settings_name',
        'code',
        'deleted_at'
    ];
}
