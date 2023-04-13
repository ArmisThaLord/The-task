<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gifts>
 */
class GiftsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->randomNumber(5),
            'name' => fake()->name(),
            'unit_price' => fake()->randomNumber(3),
            'unit_owned' => fake()->randomNumber(2),
            // 'id' => $this->faker->randomNumber(5),
            // 'name' => $this->faker->name(),
            // 'unit_price' => $this->faker->randomNumber(3),
            // 'unit_owned' => $this->faker->randomNumber(2),
            
        ];
    }
}
