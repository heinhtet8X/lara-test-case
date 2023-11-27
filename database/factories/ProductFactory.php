<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"        => $this->faker->name,
            "price"       => $this->faker->randomFloat(2, 0, 0),
            "qty"         => $this->faker->randomFloat(1, 0, 0),
            "category_id" => Category::all()->random()->id,
        ];
    }
}
