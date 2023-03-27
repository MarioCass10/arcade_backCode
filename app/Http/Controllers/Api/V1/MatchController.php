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
    public function matchs()
    {
        return Matchs::all();
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
    public function show(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matchs $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matchs $user)
    {
        //
    }
}