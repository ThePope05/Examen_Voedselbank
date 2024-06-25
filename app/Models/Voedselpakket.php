<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voedselpakket extends Model
{
    use HasFactory;

    // De naam van de tabel die dit model vertegenwoordigt
    protected $table = 'voedselpakketten';

    // De attributen die massaal toegewezen mogen worden
    protected $fillable = [
        'klant_id',
        'gemaakt_door_id',
        'uitgiftedatum'
    ];

    /**
     * Definieert de relatie met het Klant model.
     * Een voedselpakket behoort tot een klant.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function klant()
    {
        return $this->belongsTo(Klant::class, 'klant_id');
    }

    /**
     * Definieert de relatie met het Gebruiker model.
     * Een voedselpakket is gemaakt door een gebruiker.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gemaaktDoor()
    {
        return $this->belongsTo(Gebruiker::class, 'gemaakt_door_id');
    }

    /**
     * Definieert de relatie met het Product model.
     * Een voedselpakket bevat veel producten.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function producten()
    {
        return $this->belongsToMany(Product::class, 'voedselpakket_producten', 'voedselpakket_id', 'product_id')
            ->withPivot('aantal');
    }
}
