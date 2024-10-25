<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pet;


class Breed extends Model
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
