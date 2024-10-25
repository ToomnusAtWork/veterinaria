<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Pet;

class PetType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function name(): string
    {
        return $this->name;
    }

    public function pets(): HasMany
    {
        return $this->hasMany(Pet::class);
    }
}
