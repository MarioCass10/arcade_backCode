<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matchs', function (Blueprint $table) {
            $table->id();
            $table->integer('player1');
            $table->integer('player2');
            $table->unsignedbiginteger('game_id');
            //$table->foreign('game_id')->references('id')->on('games');
            $table->unsignedbiginteger('score1')->nullable();
            $table->unsignedbiginteger('score2')->nullable();
            $table->unsignedbiginteger('winner')->nullable();
            
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matchs');
    }
};