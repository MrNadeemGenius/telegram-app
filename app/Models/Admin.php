<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins'; // Specify the table name

    protected $fillable = [
        'username',
        'password',
        'email',
        'name',
    ];

    // Optional: You can define any relationships or custom methods here
}
