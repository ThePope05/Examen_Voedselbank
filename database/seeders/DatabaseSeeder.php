<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
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
