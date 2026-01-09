<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AdPostFollowupRemark extends Model
{
    protected $table = 'ads_post_followup_remark';
    protected $fillable = [
        'post_id',
        'remark',
        'created_by',
        'deleted_at'
    ];
}
