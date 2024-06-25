<?php

namespace Tests\Feature;

use App\Models\Voedselpakket;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VoedselpakketTest extends TestCase
{

    /** @test */
    public function create_and_show_voedselpakket()
    {
        // Maak een nieuwe voedselpakket aan
        $voedselpakketten = Voedselpakket::create(
            [
                'klant_id' => 1,
                'gemaakt_door_id' => 1,
                'uitgiftedatum' => '2024-06-25',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        // Haal de voedselpakket op uit de database
        $result = Voedselpakket::find($voedselpakketten->id);

        // Assert dat de klant id correct is ingesteld en opgehaald
        $this->assertEquals('1', $result->klant_id);
    }
}
