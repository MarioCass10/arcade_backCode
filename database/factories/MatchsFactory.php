<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class MatchsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'player1_id' =>rand(1,10),
            'player2_id' => rand(1,10),
            'game_id'=> ran(1,10),           
            'score1' => rand(1,10),
            'score2' => rand(1,10),
            'winner_id' => rand(1,10),  
        ];
    }
}
