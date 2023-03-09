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
        Schema::create('rounds', function (Blueprint $table) {
            $table->id();
            $table->integer('jugador_id');
            $table->integer('round_player');
        });
     }

     public function down(): void
     {
         Schema::dropIfExists('rounds');
     }
    
};