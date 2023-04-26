<?php

namespace Database\Factories;

use DateTime;
use App\Models\Campaigns;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CampaignFactory extends Factory
{

    protected $model = Campaigns::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'gift_item'=>fake()->words(3, true),
            'gift_item_count'=>fake()->randomNumber(2),
            'status'=>fake()->randomElement(['preparing', 'ready', 'dispatched']),
            'dispatch_date'=>now(),
            'delivery_date'=>now()->addWeeks($this->faker->numberBetween(3, 4)),
        ];
    }
}
