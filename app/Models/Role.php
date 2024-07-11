<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\UserRolesEnum;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status'
    ];

    // protected $casts = [
    //     'name' => UserRolesEnum::class,
    // ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
