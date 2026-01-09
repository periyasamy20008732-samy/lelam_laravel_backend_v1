<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class DeleteAccountRequest extends Model
{
    protected $table = 'delete_account_request';
    protected $fillable = [
        'user_id',
        'status_detail',
        'status',
        'deleted_at'
    ];
}
