<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nette\Utils\Arrays;

class Klant extends Model
{
    use HasFactory;

    //We geven aan dat de tabel die bij dit model hoort 'klanten' is
    protected $table = 'klanten';

    //We geven aan dat de volgende kolommen ingevuld mogen worden
    protected $fillable = [
        'naam',
        'email',
        'telefoonnummer',
        'adres',
        'volwassenen',
        'kinderen',
        'babies',
    ];

    //We geven aan dat de volgende relatie bestaat tussen de klant en de allergenen
    public function allergenen()
    {
        return $this->belongsToMany(Allergy::class, 'klanten_allergenen', 'klant_id', 'allergie_id');
    }

    //We geven aan dat de volgende relatie bestaat tussen de klant en de voedselpakketten
    public function voedselpakketten()
    {
        return $this->hasMany(Voedselpakket::class, 'klant_id');
    }

    //Met deze functie voegen we een nieuwe klant toe aan de database
    public function storeKlant($klant)
    {
        //Hier slaan we tijdelijk de allergenen op buiten de klant
        $allergenen = $klant['allergenen'];

        //Hier maken we een nieuwe klant aan in de database
        $klant = Klant::create([
            'naam' => $klant['naam'],
            'email' => $klant['email'],
            'telefoonnummer' => $klant['telefoonnummer'],
            'adres' => $klant['adres'],
            'volwassenen' => $klant['volwassenen'],
            'kinderen' => $klant['kinderen'],
            'babies' => $klant['babies'],
        ]);

        //Hier voegen we een relatie toe tussen allergenen en klanten
        $klant->allergenen()->attach($allergenen);
    }

    //Met deze functie passen we een klant aan in de database
    public function updateKlant($klant, $id)
    {
        //Hier slaan we tijdelijk de allergenen op buiten de klant
        $allergenen = $klant['allergenen'];

        //Hier passen we de klant aan in de database
        Klant::where('id', $id)->update([
            'naam' => $klant->naam,
            'email' => $klant->email,
            'telefoonnummer' => $klant->telefoonnummer,
            'adres' => $klant->adres,
            'volwassenen' => $klant->volwassenen,
            'kinderen' => $klant->kinderen,
            'babies' => $klant->babies,
        ]);


        //Hier halen we de klant op uit de database
        $klant = Klant::find($id);

        //Hier verwijderen we de oude relatie tussen allergenen en klanten
        Klant::find($id)->allergenen()->detach();

        //Hier voegen we een relatie toe tussen allergenen en klanten
        $klant->allergenen()->attach($allergenen);
    }

    //Met deze functie verwijderen we een klant uit de database
    public function deleteKlant($id)
    {
        //Hier verwijderen we de relatie tussen allergenen en klanten
        Klant::find($id)->allergenen()->detach();

        //Hier verwijderen we de klant uit de database
        Klant::where('id', $id)->delete();
    }
}
