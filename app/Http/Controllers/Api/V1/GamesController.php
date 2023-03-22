<?php

namespace App\Http\Controllers\Api\V1;
use Illuminate\Support\Facades\DB;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Game;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function games(Request $request)
    {   
        $games = Game::orderBy('title')
            ->get();

        //Retorna los resultados en orden alfabetico
        //Se pueden ver desde el PostMan
        return $games;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}

