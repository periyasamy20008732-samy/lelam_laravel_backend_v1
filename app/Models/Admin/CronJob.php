<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class CronJob extends Model
{
    protected $table = 'cron_job';
    protected $fillable = [
        'data',
        'deleted_at'
    ];
}
