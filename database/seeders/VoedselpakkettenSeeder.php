<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoedselpakkettenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('voedselpakketten')->insert([
            ['klant_id' => 1, 'gemaakt_door_id' => 1, 'uitgiftedatum' => '2024-06-01', 'created_at' => now(), 'updated_at' => now()],
            ['klant_id' => 2, 'gemaakt_door_id' => 2, 'uitgiftedatum' => '2024-06-02', 'created_at' => now(), 'updated_at' => now()],
            ['klant_id' => 3, 'gemaakt_door_id' => 3, 'uitgiftedatum' => '2024-06-03', 'created_at' => now(), 'updated_at' => now()],
            ['klant_id' => 4, 'gemaakt_door_id' => 4, 'uitgiftedatum' => '2024-06-04', 'created_at' => now(), 'updated_at' => now()],
            ['klant_id' => 5, 'gemaakt_door_id' => 5, 'uitgiftedatum' => '2024-06-05', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
