<?php

use Illuminate\Database\Seeder;
use Database\Seeders\CategorieTableSeeder;
use Database\Seeders\LeveranciersTableSeeder;
use Database\Seeders\KlantenTableSeeder;
use Database\Seeders\ProductenTableSeeder;
use Database\Seeders\VoedselpakkettenTableSeeder;
use Database\Seeders\VoedselpakketProductenTableSeeder;
use Database\Seeders\ProductAllergyTableSeeder;

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
    public function run()
    {
        $this->call([
            CategorieTableSeeder::class,
            LeveranciersTableSeeder::class,
            KlantenTableSeeder::class,
            ProductenTableSeeder::class,
            VoedselpakkettenTableSeeder::class,
            VoedselpakketProductenTableSeeder::class,
            ProductAllergyTableSeeder::class,
        ]);
    }
}
