<?php

namespace Database\Seeders;

use App\Models\Allergy;
use App\Models\Klant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorieTableSeeder;
use Database\Seeders\LeveranciersTableSeeder;
use Database\Seeders\KlantenTableSeeder;
use Database\Seeders\ProductenTableSeeder;
use Database\Seeders\VoedselpakkettenTableSeeder;
use Database\Seeders\VoedselpakketProductenTableSeeder;
use Database\Seeders\ProductAllergyTableSeeder;
use Database\Seeders\GebruikersSeeder;
use Database\Seeders\LeveranciersSeeder;
use Database\Seeders\CategorieSeeder;
use Database\Seeders\ProductenSeeder;
use Database\Seeders\KlantenSeeder;
use Database\Seeders\VoedselpakkettenSeeder;
use Database\Seeders\VoedselpakketProductenSeeder;
use Database\Seeders\AllergenenSeeder;
use Database\Seeders\KlantenAllergenenSeeder;
use Database\Seeders\ProductAllergieSeeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GebruikersSeeder::class,
            LeveranciersSeeder::class,
            CategorieSeeder::class,
            ProductenSeeder::class,
            KlantenSeeder::class,
            VoedselpakkettenSeeder::class,
            VoedselpakketProductenSeeder::class,
            AllergenenSeeder::class,
            KlantenAllergenenSeeder::class,
            ProductAllergieSeeder::class,
            CategorieTableSeeder::class,
            LeveranciersTableSeeder::class,
            KlantenTableSeeder::class,
            ProductenTableSeeder::class,
            VoedselpakketProductenTableSeeder::class,
            ProductAllergyTableSeeder::class,
        // User::factory(10)->create();

        Klant::factory(10)->create();

        Allergy::insert([
            [
                'naam' => 'Gluten',
                'beschrijving' => 'Gluten is een eiwit dat voorkomt in tarwe, rogge en gerst.'
            ],
            [
                'naam' => 'Lactose',
                'beschrijving' => 'Lactose is een suiker die van nature voorkomt in melk en melkproducten.',
            ],
            [
                'naam' => 'Pinda',
                'beschrijving' => 'Pinda is een peulvrucht die in allerlei producten kan zitten.',
            ],
            [
                'naam' => 'Schaaldieren',
                'beschrijving' => 'Schaaldieren zijn waterdieren met een uitwendig skelet, zoals garnalen, krab, kreeft en rivierkreeft.'
            ],
            [
                'naam' => 'Soja',
                'beschrijving' => 'Soja is een peulvrucht die in allerlei producten kan zitten.'
            ],
            [
                'name' => 'Noten',
                'beschrijving' => 'Noten zijn vruchten met een harde schaal die aan bomen groeien.'
            ]

        ]);

        DB::table('klanten_allergenen')->insert([
            [
                'klant_id' => 1,
                'allergie_id' => 1,
            ],
            [
                'klant_id' => 1,
                'allergie_id' => 2,
            ],
            [
                'klant_id' => 2,
                'allergie_id' => 3,
            ],
            [
                'klant_id' => 3,
                'allergie_id' => 4,
            ],
            [
                'klant_id' => 4,
                'allergie_id' => 5,
            ],
            [
                'klant_id' => 5,
                'allergie_id' => 6,
            ],
            [
                'klant_id' => 6,
                'allergie_id' => 1,
            ],
            [
                'klant_id' => 7,
                'allergie_id' => 2,
            ],
            [
                'klant_id' => 8,
                'allergie_id' => 3,
            ],
            [
                'klant_id' => 9,
                'allergie_id' => 4,
            ],
            [
                'klant_id' => 10,
                'allergie_id' => 5,
            ]
        ]);
    }
}
