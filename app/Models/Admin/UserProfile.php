<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'user_profile';
    protected $fillable = [
        'user_id',
        'address1',
        'address2',
        'state',
        'pincode',
        'city',
        'country',
        'image',
        'deleted_at'
    ];
}
