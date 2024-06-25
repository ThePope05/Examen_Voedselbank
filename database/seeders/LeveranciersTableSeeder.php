<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Leverancier;

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
        // 5 Leveranciers aanmaken
        Leverancier::create([
            'bedrijfsnaam' => 'Bedrijf A',
            'adres' => 'Straatweg 1, 1234 AB Stad',
            'contactpersoon' => 'Jan de Vries',
            'email' => 'jan@bedrijfa.nl',
            'telefoonnummer' => '012-3456789',
        ]);

        Leverancier::create([
            'bedrijfsnaam' => 'Bedrijf B',
            'adres' => 'Dorpsstraat 2, 2345 CD Dorp',
            'contactpersoon' => 'Erik Bakker',
            'email' => 'erik@bedrijfb.nl',
            'telefoonnummer' => '023-4567890',
        ]);

        Leverancier::create([
            'bedrijfsnaam' => 'Bedrijf C',
            'adres' => 'Laan 3, 3456 DE Gehucht',
            'contactpersoon' => 'Sara Groen',
            'email' => 'sara@bedrijfc.nl',
            'telefoonnummer' => '034-5678901',
        ]);

        Leverancier::create([
            'bedrijfsnaam' => 'Bedrijf D',
            'adres' => 'Weg 4, 4567 EF Plek',
            'contactpersoon' => 'Pieter Zwart',
            'email' => 'pieter@bedrijfd.nl',
            'telefoonnummer' => '045-6789012',
        ]);

        Leverancier::create([
            'bedrijfsnaam' => 'Bedrijf E',
            'adres' => 'Pad 5, 5678 GH Oord',
            'contactpersoon' => 'Linda Wit',
            'email' => 'linda@bedrijfe.nl',
            'telefoonnummer' => '056-7890123',
        ]);
    }
}
