<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\State;
use Database\Seeders\StateSeeder;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Story>
 */
class StoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'state_id' => State::pluck('id')->random(),
            'title' => fake()->words(3, true),
            'body' => fake()->paragraph(),
            'teller' => fake()->words(2, true),
            'clicks' => fake()->randomNumber(2)
        ];
    }
}
