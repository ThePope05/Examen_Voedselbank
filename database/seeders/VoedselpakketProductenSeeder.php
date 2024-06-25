<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoedselpakketProductenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('voedselpakket_producten')->insert([
            ['voedselpakket_id' => 1, 'product_id' => 1, 'hoeveelheid' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['voedselpakket_id' => 1, 'product_id' => 2, 'hoeveelheid' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['voedselpakket_id' => 2, 'product_id' => 3, 'hoeveelheid' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['voedselpakket_id' => 3, 'product_id' => 4, 'hoeveelheid' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['voedselpakket_id' => 4, 'product_id' => 5, 'hoeveelheid' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
