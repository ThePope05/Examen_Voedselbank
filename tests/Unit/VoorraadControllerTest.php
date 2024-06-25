<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Product;
use App\Models\Categorie;
use App\Models\Leverancier;
use Illuminate\Support\Facades\Artisan;

class VoorraadControllerTest extends TestCase
{
    use RefreshDatabase; // Gebruik RefreshDatabase trait om de database na elke test leeg te maken

    public function setUp(): void
    {
        parent::setUp();

        // Voer de seeders uit om de benodigde gegevens in te voeren
        Artisan::call('db:seed', ['--class' => 'Database\Seeders\CategorieTableSeeder']);
        Artisan::call('db:seed', ['--class' => 'Database\Seeders\LeveranciersTableSeeder']);
    }

    /** @test */
    public function store_method_adds_product_to_database()
    {
        // Maak een nieuwe categorie en leverancier aan
        $categorie = Categorie::first();
        $leverancier = Leverancier::first();

        // Simuleer een geldig POST-verzoek naar de store methode van VoorraadController
        $response = $this->post(route('voorraad.store'), [
            'naam' => 'Nieuw Product',
            'categorie_id' => $categorie->id,
            'streepjescode' => '123456789',
            'voorraad' => 10,
            'leverancier_id' => $leverancier->id,
        ]);

        // Assert: controleer of het product correct is toegevoegd aan de database
        $response->assertRedirect(route('voorraad.index'));
        $this->assertDatabaseHas('producten', [
            'naam' => 'Nieuw Product',
            'streepjescode' => '123456789',
            'voorraad' => 10,
            'categorie_id' => $categorie->id,
            'leverancier_id' => $leverancier->id,
        ]);
    }
}
