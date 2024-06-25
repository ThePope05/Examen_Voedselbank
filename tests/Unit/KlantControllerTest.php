<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Klant;

class KlantControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the index method of KlantController.
     *
     * @return void
     */
    public function testIndex()
    {
        // Arrange: Create some Klant instances.
        $klants = Klant::factory()->count(3)->create();

        // Arrange: Create a GET request to the index method of KlantController.
        $response = $this->get(route('klanten.overzicht'));

        // Assert: The response should be successful.
        $response->assertStatus(200);

        // Assert: The response should contain the names of the Klant instances.
        foreach ($klants as $klant) {
            $response->assertSee($klant->naam);
        }
    }
}
