<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\PetType;
use App\Models\User;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'pet_type_id',
        'breed_id',
        'date_of_birth',
        'weight',
        'allergen',
        'note',
        'owner_id'
    ];

    public function name(): string
    {
        return $this->name;
    }

    public function pettype(): BelongsTo
    { 
        return $this->belongsTo(PetType::class, 'foreign_key');
    }

    public function breed(): BelongsTo
    {
        return $this->belongsTo(Breed::class);
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
