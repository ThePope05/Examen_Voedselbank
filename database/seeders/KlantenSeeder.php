<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KlantenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('klanten')->insert([
            ['naam' => 'Klant A', 'adres' => 'Adres 1, Amsterdam', 'telefoonnummer' => '0612345678', 'email' => 'klanta@voorbeeld.com', 'volwassenen' => 2, 'kinderen' => 1, 'babies' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Klant B', 'adres' => 'Adres 2, Rotterdam', 'telefoonnummer' => '0612345679', 'email' => 'klantb@voorbeeld.com', 'volwassenen' => 1, 'kinderen' => 2, 'babies' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Klant C', 'adres' => 'Adres 3, Utrecht', 'telefoonnummer' => '0612345680', 'email' => 'klantc@voorbeeld.com', 'volwassenen' => 3, 'kinderen' => 0, 'babies' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Klant D', 'adres' => 'Adres 4, Den Haag', 'telefoonnummer' => '0612345681', 'email' => 'klantd@voorbeeld.com', 'volwassenen' => 2, 'kinderen' => 3, 'babies' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Klant E', 'adres' => 'Adres 5, Eindhoven', 'telefoonnummer' => '0612345682', 'email' => 'klante@voorbeeld.com', 'volwassenen' => 1, 'kinderen' => 1, 'babies' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
