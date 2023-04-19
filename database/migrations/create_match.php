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
            $table->integer('player1_id');
            $table->integer('player2_id');
            $table->unsignedbiginteger('game_id');
            $table->unsignedbiginteger('score1')->nullable();
            $table->unsignedbiginteger('score2')->nullable();
            $table->unsignedbiginteger('winner_id')->nullable();
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