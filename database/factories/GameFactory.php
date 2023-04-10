<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = [
            
            'title'=>Str::random(10),
            'url'=> $this->faker->url(),
            'match_type_id' => rand(1,5),
            'game_id' => rand(1,10),
        ];

        return $title;
        
        
        
    }
}