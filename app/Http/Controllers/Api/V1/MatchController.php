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
    {
        $match = new Matchs();
        $match ->player1 = $request->player1;
        $match ->player2 = $request->player2;


        
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
    {
        $match ->score1 = $request->score1;
        $match ->score2 = $request->score2;
        $match->winner = $request->winner;
        
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