<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            "title" => fake()->title(),
            "description" => fake()->realText(),
            "image" => fake()->imageUrl(),
            "price_per_hour" => fake()->numberBetween(10, 20),
            "price_per_day" => fake()->numberBetween(50, 150),
        ];
    }
}
