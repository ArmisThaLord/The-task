<?php

namespace Database\Factories;

use App\Models\GiftsItems;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gifts>
 */
class GiftsFactory extends Factory
{
    
    protected $model = GiftsItems::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'unit_price' => fake()->randomNumber(3),
            'units_owned' => fake()->randomNumber(2),
        ];
    }
}
