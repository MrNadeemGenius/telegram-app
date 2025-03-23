<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\User;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'balance',
        'referral_code',
        'language_code',
        'is_premium',
        'photo_url',
        'telegram_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token',
    ];


    public function referrals()
    {
        return $this->hasMany(User::class, 'referral_code', 'telegram_id');
    }
    public function referrer()
    {
        return $this->belongsTo(User::class, 'referral_code', 'telegram_id');
    }
    public function referralCount()
    {
        return $this->referrals()->count();
    }

}
