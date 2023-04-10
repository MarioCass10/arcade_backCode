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
        Schema::create('games', function (Blueprint $table) {
            $table->id('id');
            $table->integer('game_id');
            $table->unsignedBiginteger('match_type_id');
            $table->foreign('match_type_id')->references('id')->on('match_types');
            $table->string('title');
            $table->string('url');
        });
     }

     public function down(): void
     {
        Schema::dropIfExists('games');
     }
    
};