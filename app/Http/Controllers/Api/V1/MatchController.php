<?php

namespace App\Http\Controllers\Api\V1;
use Illuminate\Support\Facades\DB;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Matchs;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function matchs(Request $request)
    {
        return Matchs::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    //Obtiene la informacion copn request y luego se guarda para archivarla en base de datos
    {
        $match = new Matchs();
        //$match ->id = $request->id;
        $match ->player1_id = $request->player1_id;
        $match ->player2_id = $request->player2_id;
        
        $match->game_id = $request->game_id;
        
        $match->save();         

        return $match; 
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matchs $match)

    //Reliza un Update de la informacion obtenida anteriormente 
    {
        $match ->score1 = $request->score1;
        $match ->score2 = $request->score2;
        $match->winner_id = $request->winner_id;
        
        $match->save();         

        return $match;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matchs $match)
    {
        //
    }
}