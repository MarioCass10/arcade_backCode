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
        ['title' => 'Street Fighter 2', 'url' => config('app.url').'/img/street-FIGTHER.png'],
        ['title' => 'Mortal Kombat 2', 'url' => config('app.url').'/img/mortal-komabt.png'],
        ['title' => 'King of Fighters 98', 'url' => config('app.url').'/img/king_figther.jpg'],
        ['title' => 'Soccer Brawl', 'url' => config('app.url').'/img/soccer_brawl.jpg'],
        ['title' => 'Windjammers', 'url' => config('app.url').'/img/windjammers.png'],
        ['title' => 'Super Sidekicks 3', 'url' => config('app.url').'/img/super_sidekicks_3.jpg'],
        ['title' => 'Tetris', 'url' => config('app.url').'/img/tetris.png'],
        ['title' => 'Marvel vs Capcom', 'url' => config('app.url').'/img/Marvel+vs.+Capcom.jpg'],
        ['title' => 'X-Men vs Street Fighter', 'url' => config('app.url').'/img/x-men_vs_street_figther.png'],
        ['title' => 'Puzzle Bobble', 'url' => config('app.url').'/img/puzzle_bobble.png']
    ];

    DB::table('games')->insert($games);
    
    \App\Models\Round::factory(10)->create();
    
    \App\Models\Matchs::factory(10)->create();

    }



    
}
