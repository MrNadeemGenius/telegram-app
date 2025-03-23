<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyAds extends Model
{
    protected $table = 'daily_ads';
    
    protected $fillable = [
        'date',
        'user_id',
        'ads',
        'earning',
    ];
}
