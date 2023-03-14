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
            'player1' => (''),
            'player2' => (''),
            'game' => (''),
            'score1' =>rand(1,10),
            'score2' => rand(1,10),
            'winner' => (''),
            
        ];
    }
}
