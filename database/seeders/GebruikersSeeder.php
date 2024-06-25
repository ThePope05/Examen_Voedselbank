<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GebruikersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gebruikers')->insert([
            ['naam' => 'Jan de Vries', 'email' => 'jan@voorbeeld.com', 'wachtwoord' => Hash::make('wachtwoord123'), 'rol' => 'directie', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Piet Jansen', 'email' => 'piet@voorbeeld.com', 'wachtwoord' => Hash::make('wachtwoord123'), 'rol' => 'magazijnmedewerker', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Klaas Bakker', 'email' => 'klaas@voorbeeld.com', 'wachtwoord' => Hash::make('wachtwoord123'), 'rol' => 'vrijwilliger', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Marie de Boer', 'email' => 'marie@voorbeeld.com', 'wachtwoord' => Hash::make('wachtwoord123'), 'rol' => 'directie', 'created_at' => now(), 'updated_at' => now()],
            ['naam' => 'Lisa Kuiper', 'email' => 'lisa@voorbeeld.com', 'wachtwoord' => Hash::make('wachtwoord123'), 'rol' => 'vrijwilliger', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
