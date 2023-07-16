<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'user_id' => fake()->numberBetween($min = 1, $max = 10),
            'phone' => fake()->randomDigit([0, 1]),
            'gender' => fake()->randomElement(['M', 'F']),
            'debt' => 0
        ];
    }
}
