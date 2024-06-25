<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('producten')->insert([
            ['naam' => 'Komkommer', 'categorie_id' => 1, 'streepjescode' => '1234567890123', 'voorraad' => 100, 'leverancier_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Appel', 'categorie_id' => 2, 'streepjescode' => '1234567890124', 'voorraad' => 150, 'leverancier_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Melk', 'categorie_id' => 3, 'streepjescode' => '1234567890125', 'voorraad' => 200, 'leverancier_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Brood', 'categorie_id' => 4, 'streepjescode' => '1234567890126', 'voorraad' => 50, 'leverancier_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Kipfilet', 'categorie_id' => 5, 'streepjescode' => '1234567890127', 'voorraad' => 75, 'leverancier_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
