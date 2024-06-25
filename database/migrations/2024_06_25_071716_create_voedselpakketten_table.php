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
        Schema::create('voedselpakketten', function (Blueprint $table) {
            $table->id();
            $table->foreignId('klant_id')->constrained('klanten');
            $table->foreignId('gemaakt_door_id')->constrained('gebruikers');
            $table->date('uitgiftedatum')->nullable();
            $table->timestamps(6);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voedselpakketten');
    }
};
