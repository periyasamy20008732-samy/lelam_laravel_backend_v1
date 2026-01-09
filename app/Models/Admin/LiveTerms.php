<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class LiveTerms extends Model
{
    protected $table = 'live_terms';
    protected $fillable = [
        'user_id',
        'accepted',
        'deleted_at'
    ];
}
