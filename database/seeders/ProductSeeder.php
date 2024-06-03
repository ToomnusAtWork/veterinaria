<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Royal Canin mini indoor',
            'image' => 'royalgreen',
            'description' => 'royal canin food for elder indoor dog.',
            'quantity' => 10,
            'price' => 1029.00,
            'product_category_id' => 1
        ]);

        Product::create([
            'name' => 'Goat Milk Series',
            'image' => 'goatmilktreat',
            'description' => 'dog treat make from goat milk boost immue system.',
            'quantity' => 5,
            'price' => 120.00,
            'product_category_id' => 2
        ]);

        Product::create([
            'name' => 'Lola&Co Tofu Cat Sand',
            'image' => 'lolacocatsand',
            'description' => 'Material: 100% Bentonite Natural Coal Ore and smell like tofu.',
            'quantity' => 20,
            'price' => 95.00,
            'product_category_id' => 3
        ]);

        Product::create([
            'name' => 'Petkit Pura Max Cat toilet',
            'image' => 'cattoilet',
            'description' => 'Completely covered to prevent cat litter and other dirt. Good odor protection comes with a sand scoop',
            'quantity' => 5,
            'price' => 11900.00,
            'product_category_id' => 4
        ]);

    }
}
