<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet;
use App\Models\PetType;
use App\Models\Breed;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PetType::create([
            'name' => 'dog'
        ]);

        PetType::create([
            'name' => 'cat'
        ]);

        PetType::create([
            'name' => 'rabbit'
        ]);

        PetType::create([
            'name' => 'rodents'
        ]);
        
        PetType::create([
            'name' => 'bird'
        ]);

        PetType::create([
            'name' => 'fish'
        ]);

        Breed::create([
            'name' => 'golden retriever'
        ]);

        Breed::create([
            'name' => 'german shepherd'
        ]);

        Breed::create([
            'name' => 'bull dog'
        ]);

        Breed::create([
            'name' => 'chihuahua'
        ]);

        Pet::create([
            'name' => 'PanMong',
            'pet_type_id' => 1,
            'breed_id' => 1,
            'date_of_birth' => '2022-03-20',
            'weight' => 20,
            'allergen' => '-',
            'note' => 'He is a good boy and want to be love',
            'user_id' => 2,
        ]);

    }
}
