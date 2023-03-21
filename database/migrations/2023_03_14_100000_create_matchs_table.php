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
            $table->unsignedbiginteger('player1')->nullable();
            $table->unsignedbiginteger('player2');
            $table->unsignedbiginteger('game_id');
            $table->float('score1');
            $table->float('score2');
            $table->unsignedbiginteger('winner');
            
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