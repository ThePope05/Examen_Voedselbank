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
        Schema::create('klanten', function (Blueprint $table) {
            $table->id();
            $table->string('naam', 255);
            $table->string('adres', 255);
            $table->string('telefoonnummer', 20);
            $table->string('email', 255);
            $table->integer('volwassenen')->default(1);
            $table->integer('kinderen')->default(0);
            $table->integer('babies')->default(0);
            $table->timestamps(6);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klanten');
    }
};
