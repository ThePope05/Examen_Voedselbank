<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorie')->insert([
            ['naam' => 'Aardappelen, groente, fruit', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Kaas, vleeswaren', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Zuivel, plantaardig en eieren', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Bakkerij en banket', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Frisdrank, sappen, koffie en thee', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Pasta, rijst en wereldkeuken', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Soepen, sauzen, kruiden en olie', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Snoep, koek, chips en chocolade', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Baby, verzorging en hygiëne', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
