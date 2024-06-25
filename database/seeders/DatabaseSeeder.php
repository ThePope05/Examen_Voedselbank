<?php

use Illuminate\Database\Seeder;
use Database\Seeders\CategorieTableSeeder;
use Database\Seeders\LeveranciersTableSeeder;
use Database\Seeders\KlantenTableSeeder;
use Database\Seeders\ProductenTableSeeder;
use Database\Seeders\VoedselpakkettenTableSeeder;
use Database\Seeders\VoedselpakketProductenTableSeeder;
use Database\Seeders\ProductAllergyTableSeeder;
use Database\Seeders\GebruikersSeeder;
use Database\Seeders\LeveranciersSeeder;
use Database\Seeders\CategorieSeeder;
use Database\Seeders\ProductenSeeder;
use Database\Seeders\KlantenSeeder;
use Database\Seeders\VoedselpakkettenSeeder;
use Database\Seeders\VoedselpakketProductenSeeder;
use Database\Seeders\AllergenenSeeder;
use Database\Seeders\KlantenAllergenenSeeder;
use Database\Seeders\ProductAllergieSeeder;

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
            CategorieTableSeeder::class,
            LeveranciersTableSeeder::class,
            KlantenTableSeeder::class,
            ProductenTableSeeder::class,
            VoedselpakketProductenTableSeeder::class,
            ProductAllergyTableSeeder::class,
        ]);
    }
}
