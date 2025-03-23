<?php

namespace App\Models;

use App\Models\User;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    protected $table = 'withdraws';
    
    protected $fillable = [
        'amount',
        'address',
        'user_id',
        'status',
        'method_id', // Added method_id field
        'created_at',
        'updated_at',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'telegram_id');
    }


    // Define relation to Method model
    public function method()
    {
        return $this->belongsTo(PaymentMethod::class, 'method_id');
    }
}
