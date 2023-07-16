<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            'name' => fake()->sentence($nbWords = 6, $variableNbWords = true),
            'price' => fake()->randomFloat(),
            'description'=> fake()->text($maxNbChars = 200),
            'current_quantity' => fake()->randomNumber,
            'total_quantity' => fake()->randomNumber,
        ];
    }
}
