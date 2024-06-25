<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductAllergieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_allergie')->insert([
            ['product_id' => 1, 'allergie_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 2, 'allergie_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 3, 'allergie_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 4, 'allergie_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['product_id' => 5, 'allergie_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
