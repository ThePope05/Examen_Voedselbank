<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'producten'; // Naam van de tabel in de database

    protected $fillable = [ // Velden die massaal toegewezen mogen worden
        'naam',
        'voorraad',
        'streepjescode',
        'categorie_id',
        'leverancier_id',
    ];

    /**
     * Relatie: Een product behoort tot een categorie.
     */
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    /**
     * Relatie: Een product behoort tot een leverancier.
     */
    public function leverancier()
    {
        return $this->belongsTo(Leverancier::class, 'leverancier_id');
    }

    /**
     * Relatie: Een product kan allergenen hebben (veel-op-veel relatie).
     */
    public function allergenen()
    {
        return $this->belongsToMany(Allergy::class, 'product_allergie', 'product_id', 'allergenen_id');
    }

    /**
     * Relatie: Een product kan aan voedselpakketten gekoppeld zijn (veel-op-veel relatie).
     */
    public function voedselpakketten()
    {
        return $this->belongsToMany(Voedselpakket::class, 'voedselpakket_producten', 'product_id', 'voedselpakket_id');
    }
}
