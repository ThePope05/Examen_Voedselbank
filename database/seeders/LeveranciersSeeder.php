<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeveranciersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('leveranciers')->insert([
            ['bedrijfsnaam' => 'Groenten BV', 'adres' => 'Laan 1, Amsterdam', 'contactpersoon' => 'Henk de Groenteboer', 'email' => 'info@groentenbv.com', 'telefoonnummer' => '0612345678', 'created_at' => now(), 'updated_at' => now()],
            ['bedrijfsnaam' => 'Fruit NV', 'adres' => 'Straat 2, Rotterdam', 'contactpersoon' => 'Jan de Fruitteler', 'email' => 'info@fruitnv.com', 'telefoonnummer' => '0612345679', 'created_at' => now(), 'updated_at' => now()],
            ['bedrijfsnaam' => 'Zuivel Co', 'adres' => 'Weg 3, Utrecht', 'contactpersoon' => 'Anja de Zuivelaar', 'email' => 'info@zuivelco.com', 'telefoonnummer' => '0612345680', 'created_at' => now(), 'updated_at' => now()],
            ['bedrijfsnaam' => 'Bakkerij ABC', 'adres' => 'Pad 4, Den Haag', 'contactpersoon' => 'Pieter de Bakker', 'email' => 'info@bakkerijabc.com', 'telefoonnummer' => '0612345681', 'created_at' => now(), 'updated_at' => now()],
            ['bedrijfsnaam' => 'Vleeswaren XYZ', 'adres' => 'Dreef 5, Eindhoven', 'contactpersoon' => 'Sophie de Slager', 'email' => 'info@vleeswarenxyz.com', 'telefoonnummer' => '0612345682', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
