<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LeveranciersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('leveranciers')->insert([
            [
                'bedrijfsnaam' => 'Leverancier A',
                'adres' => 'Adres 1',
                'contactpersoon' => 'Contactpersoon A',
                'email' => 'a@leverancier.com',
                'telefoonnummer' => '1234567890',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'bedrijfsnaam' => 'Leverancier B',
                'adres' => 'Adres 2',
                'contactpersoon' => 'Contactpersoon B',
                'email' => 'b@leverancier.com',
                'telefoonnummer' => '0987654321',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'bedrijfsnaam' => 'Leverancier C',
                'adres' => 'Adres 3',
                'contactpersoon' => 'Contactpersoon C',
                'email' => 'c@leverancier.com',
                'telefoonnummer' => '1122334455',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'bedrijfsnaam' => 'Leverancier D',
                'adres' => 'Adres 4',
                'contactpersoon' => 'Contactpersoon D',
                'email' => 'd@leverancier.com',
                'telefoonnummer' => '5566778899',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'bedrijfsnaam' => 'Leverancier E',
                'adres' => 'Adres 5',
                'contactpersoon' => 'Contactpersoon E',
                'email' => 'e@leverancier.com',
                'telefoonnummer' => '6677889900',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
