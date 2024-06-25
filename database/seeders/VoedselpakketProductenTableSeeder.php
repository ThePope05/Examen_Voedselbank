<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VoedselpakketProductenTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('voedselpakket_producten')->insert([
            [
                'voedselpakket_id' => 1,
                'product_id' => 1,
                'hoeveelheid' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add four more records here
        ]);
    }
}
