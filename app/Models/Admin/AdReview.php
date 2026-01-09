<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AdReview extends Model
{
    protected $table = 'ads_review';
    protected $fillable = [
        'parent_id',
        'post_id',
        'user_id',
        'rating',
        'comment',
        'status',
        'deleted_at'
    ];
}
