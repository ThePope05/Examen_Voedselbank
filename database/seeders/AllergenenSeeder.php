<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergenenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('allergenen')->insert([
            ['naam' => 'Gluten', 'beschrijving' => 'Allergie voor gluten', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Lactose', 'beschrijving' => 'Allergie voor lactose', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Noten', 'beschrijving' => 'Allergie voor noten', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Schaaldieren', 'beschrijving' => 'Allergie voor schaaldieren', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Eieren', 'beschrijving' => 'Allergie voor eieren', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
