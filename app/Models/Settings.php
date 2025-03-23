<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Settings extends Model
{
    protected $table = 'settings';
    
    protected $fillable = [
        'ads_reward',
        'monetag_id',
        'ads_limit',
        'currency',
        'reffer_bonus',
    ];
}
