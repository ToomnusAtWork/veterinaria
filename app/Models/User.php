<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    const ADMIN = 1;

    const PROPERTYOWNER = 2;

    const DOCTOR = 3;

    const NURSE = 4;

    const EMPLOYEE = 5;

    const CUSTOMER = 6;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'role_id',
        'status',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

     public function name(): string
    {
        return $this->name;
    }

    public function role() 
    {
        return $this->belongsTo(Role::class);
    }

    public function cart() 
    {
        return $this->hasOne(Cart::class);
    }

    public function isAdmin(): bool
    {
        return $this->role()->where('name', 'Admin')->exists();
    }

    public function isVeterinarian(): bool
    {
        return $this->role()->where('name', 'Doctor')->exists();
    }

    public function isVetNurse(): bool
    {
        return $this->role()->where('name', 'Nurse')->exists();
    }

    public function isEmployee(): bool
    {
        return $this->role()->where('name', 'Employee')->exists();
    }

    public function isManager(): bool
    {
        return $this->role() === self::PROPERTYOWNER;
    }

    public function isCustomer(): bool
    {
        return $this->role() === self::CUSTOMER;
    }


}

