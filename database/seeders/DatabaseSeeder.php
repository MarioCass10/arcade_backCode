<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
    \App\Models\User::factory(10)->create();

    $games = [
        ['title' => 'Street Fighter 2', 'url' => 'img\street-FIGTHER.png'],
        ['title' => 'Mortal Kombat 2', 'url' => 'img\mortal-kombat.png'],
        ['title' => 'King of Fighters 98', 'url' => 'img\king-figther.jpg'],
        ['title' => 'Soccer Brawl', 'url' => 'img\soccer_brawl.jpg'],
        ['title' => 'Windjammers', 'url' => 'img\windjammers.jpg'],
        ['title' => 'Super Sidekicks 3', 'url' => 'https://www.culturaneogeo.com/reviews/sidekicks%203/1.jpg'],
        ['title' => 'Tetris', 'url' => 'https://w7.pngwing.com/pngs/837/225/png-transparent-tetris-ultimate-the-tetris-company-video-game-tetromino-80s-arcade-games-thumbnail.png'],
        ['title' => 'Marvel vs Capcom', 'url' => 'https://wowroms-photos.com/emulators-roms-logo/40/31997/420-420/Marvel+vs.+Capcom+-+Clash+of+Super+Heroes+(USA)-image.jpg'],
        ['title' => 'X-Men vs Street Fighter', 'url' => 'https://static.wikia.nocookie.net/streetfighter/images/0/00/XMenSFLogo.png/revision/latest?cb=20141026064020&path-prefix=es'],
        ['title' => 'Puzzle Bobble', 'url' => 'https://w7.pngwing.com/pngs/350/135/png-transparent-bubble-bobble-part-2-puzzle-bobble-4-bubble-bobble-plus-others-food-text-logo-thumbnail.png']
    ];

    DB::table('games')->insert($games);
    
    \App\Models\Round::factory(10)->create();
    //\App\Models\Game::factory(10)->create();
    \App\Models\Matchs::factory(10)->create();

    }



    
}
