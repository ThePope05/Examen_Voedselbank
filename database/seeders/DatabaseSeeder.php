<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GebruikersSeeder::class,
            LeveranciersSeeder::class,
            CategorieSeeder::class,
            ProductenSeeder::class,
            KlantenSeeder::class,
            VoedselpakkettenSeeder::class,
            VoedselpakketProductenSeeder::class,
            AllergenenSeeder::class,
            KlantenAllergenenSeeder::class,
            ProductAllergieSeeder::class,
        ]);
    }
}
