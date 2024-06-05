<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::create([
            'name' => 'Pet Food',
            'status' => 1,
        ]);

        ProductCategory::create([
            'name' => 'Pet Treat',
            'status' => 1,
        ]);

        ProductCategory::create([
            'name' => 'Toys',
            'status' => 1,
        ]);

        ProductCategory::create([
            'name' => 'Accessories',
            'status' => 1,
        ]);
    }
}
