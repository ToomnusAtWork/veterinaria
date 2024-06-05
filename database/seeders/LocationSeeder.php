<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        Location::create([
            'name' => 'Sukhumvit Center Clinic',
            'address' => 'Address 1',
            'telephone_number' => '1234567890',
            'status' => true,
        ]);

        Location::create([
            'name' => 'PurringVeterinaryClinic',
            'address' => 'Address 2',
            'telephone_number' => '1234567890',
            'status' => true,
        ]);

        Location::create([
            'name' => 'Thonglor Pet',
            'address' => 'Address 3',
            'telephone_number' => '1234567890',
            'status' => true,
        ]);

        Location::create([
            'name' => 'Phattanakan Vetertinary',
            'address' => 'Address 4',
            'telephone_number' => '1234567890',
            'status' => true,
        ]);
    }
}
