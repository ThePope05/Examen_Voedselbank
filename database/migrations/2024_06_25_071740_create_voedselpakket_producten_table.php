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
        Schema::create('voedselpakket_producten', function (Blueprint $table) {
            $table->id();
            $table->foreignId('voedselpakket_id')->constrained('voedselpakketten')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('producten');
            $table->integer('hoeveelheid');
            $table->timestamps(6);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voedselpakket_producten');
    }
};
