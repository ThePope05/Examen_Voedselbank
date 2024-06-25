<?php

namespace Tests\Feature;

use App\Models\Leverancier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LeverancierModelTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_and_retrieve_leverancier_bedrijfsnaam()
    {
        // Maak een nieuwe leverancier aan
        $leverancier = Leverancier::create([
            'bedrijfsnaam' => 'Test Leverancier BV',
            'adres' => 'Kerkstraat 1',
            'contactpersoon' => 'Jan Jansen',
            'email' => 'info@testleverancier.nl',
            'telefoonnummer' => '0123456789',
        ]);

        // Haal de leverancier op uit de database
        $savedLeverancier = Leverancier::find($leverancier->id);

        // Assert dat de bedrijfsnaam correct is ingesteld en opgehaald
        $this->assertEquals('Test Leverancier BV', $savedLeverancier->bedrijfsnaam);
    }
}
