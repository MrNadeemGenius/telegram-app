<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    // Define the table if it's not the default plural of the model name
    protected $table = 'payment_methods';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'name',         // Name of the payment method
        'minimum',      // Minimum transaction limit
        'maximum'       // Maximum transaction limit
    ];

    // Additional casts for min and max amounts as decimals
    protected $casts = [
        'minimum' => 'decimal:2',
        'maximum' => 'decimal:2'
    ];
}
