<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductAllergyTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('product_allergie')->insert([
            [
                'product_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add four more records here
        ]);
    }
}
