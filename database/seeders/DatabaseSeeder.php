<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Match_type;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
    //Crea los seeds de las tablas    

    $match_types = [
        ['title' => 'victorias'],
        ['title' => 'puntos'],
        ['title' => 'goles'],
    ];
    DB::table('match_types')->insert($match_types);
    
    $games = [
        ['title' => 'Street Fighter 2', 'url' => config('app.url').'/img/street-FIGTHER.png','match_type_id'=>1, 'game_id'=>1],
        ['title' => 'Mortal Kombat 2', 'url' => config('app.url').'/img/mortal-komabt.png','match_type_id'=>1, 'game_id'=>2],
        ['title' => 'King of Fighters 98', 'url' => config('app.url').'/img/king_figther.jpg','match_type_id'=>1,'game_id'=>3],
        ['title' => 'Soccer Brawl', 'url' => config('app.url').'/img/soccer_brawl.jpg','match_type_id'=>3, 'game_id'=>4],
        ['title' => 'Windjammers', 'url' => config('app.url').'/img/windjammers.png','match_type_id'=>3, 'game_id'=>5],
        ['title' => 'Super Sidekicks 3', 'url' => config('app.url').'/img/super_sidekicks_3.jpg','match_type_id'=>3, 'game_id'=>6],
        ['title' => 'Tetris', 'url' => config('app.url').'/img/tetris.png','match_type_id'=>2, 'game_id'=>7],
        ['title' => 'Marvel vs Capcom', 'url' => config('app.url').'/img/marvel_capcom.jpg','match_type_id'=>1, 'game_id'=>8],
        ['title' => 'X-Men vs Street Fighter', 'url' => config('app.url').'/img/x-men_vs_street_figther.png','match_type_id'=>1, 'game_id'=>9],
        ['title' => 'Puzzle Bobble', 'url' => config('app.url').'/img/puzzle_bobble.png','match_type_id'=>2, 'game_id'=>10]
    ];
    DB::table('games')->insert($games);

    \App\Models\Round::factory(10)->create();
    
    //\App\Models\Matchs::factory(10)->create();

    }



    
}
