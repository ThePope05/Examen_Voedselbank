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
            $table->unsignedBigInteger('klant_id');
            $table->date('uitgiftedatum');
            $table->unsignedBigInteger('gemaakt_door_id')->nullable()->default(1); // Example default value
            $table->timestamps();
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
