<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Product::class;

    public function definition(): array
    {
        return [
            // 'name' => $this->faker()->name(),
            // 'description' => $this->faker()->sentence(),
            // 'quantity' => $this->faker()->randomNumber(5, false),
            // 'price' => $this->faker()->randomNumber(4, false),
            // 'product_category_id' => $this->faker()

        ];
    }
}
