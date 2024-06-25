<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategorieTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categorie')->insert([
            ['naam' => 'Aardappelen, groente, fruit', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['naam' => 'Kaas, vleeswaren', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['naam' => 'Zuivel, plantaardig en eieren', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['naam' => 'Bakkerij en banket', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['naam' => 'Frisdrank, sappen, koffie en thee', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['naam' => 'Pasta, rijst en wereldkeuken', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['naam' => 'Soepen, sauzen, kruiden en olie', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['naam' => 'Snoep, koek, chips en chocolade', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['naam' => 'Baby, verzorging en hygiëne', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
