<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductenTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('producten')->insert([
            [
                'naam' => 'Appel',
                'categorie_id' => 1,
                'streepjescode' => '12345678901211',
                'voorraad' => 100,
                'leverancier_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'naam' => 'Banaan',
                'categorie_id' => 1,
                'streepjescode' => '1234567890116',
                'voorraad' => 150,
                'leverancier_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'naam' => 'Kaas',
                'categorie_id' => 2,
                'streepjescode' => '1234567890161',
                'voorraad' => 50,
                'leverancier_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'naam' => 'Melk',
                'categorie_id' => 3,
                'streepjescode' => '1234567890181',
                'voorraad' => 200,
                'leverancier_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'naam' => 'Brood',
                'categorie_id' => 4,
                'streepjescode' => '1234567890119',
                'voorraad' => 120,
                'leverancier_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
