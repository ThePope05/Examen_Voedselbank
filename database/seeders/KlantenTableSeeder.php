<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KlantenTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('klanten')->insert([
            [
                'naam' => 'Jan Janssen',
                'adres' => 'Straat 1, Stad',
                'telefoonnummer' => '0612345678',
                'email' => 'jan.janssen@example.com',
                'volwassenen' => 2,
                'kinderen' => 1,
                'babies' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'naam' => 'Piet Pietersen',
                'adres' => 'Straat 2, Stad',
                'telefoonnummer' => '0623456789',
                'email' => 'piet.pietersen@example.com',
                'volwassenen' => 1,
                'kinderen' => 2,
                'babies' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'naam' => 'Klaas Klaassen',
                'adres' => 'Straat 3, Stad',
                'telefoonnummer' => '0634567890',
                'email' => 'klaas.klaassen@example.com',
                'volwassenen' => 2,
                'kinderen' => 0,
                'babies' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'naam' => 'Anja Anjassen',
                'adres' => 'Straat 4, Stad',
                'telefoonnummer' => '0645678901',
                'email' => 'anja.anjassen@example.com',
                'volwassenen' => 1,
                'kinderen' => 3,
                'babies' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'naam' => 'Maria Marias',
                'adres' => 'Straat 5, Stad',
                'telefoonnummer' => '0656789012',
                'email' => 'maria.marias@example.com',
                'volwassenen' => 2,
                'kinderen' => 1,
                'babies' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
