<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VoedselpakkettenTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('voedselpakketten')->insert([
            [
                'klant_id' => 1,
                'uitgiftedatum' => '2024-06-25',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'klant_id' => 2,
                'uitgiftedatum' => '2024-06-26',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);
    }
}
