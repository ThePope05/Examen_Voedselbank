<?php
use Illuminate\Database\Seeder;
use App\Models\Leverancier;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
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