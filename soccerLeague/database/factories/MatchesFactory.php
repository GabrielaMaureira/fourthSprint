<?php

namespace Database\Factories;
use App\Models\Matches;
use App\Models\Team;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matches>
 */
class MatchesFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'local_team_id' => Team::factory()->create(),
            'visiting_team_id' => Team::factory()->create(),
            'match_date' => fake()->date(),
            'local_goals' => fake()->randomDigit(),
            'visiting_goals' => fake()->randomDigit(),
        ];
    }
}

