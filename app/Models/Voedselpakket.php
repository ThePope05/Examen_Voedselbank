<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voedselpakket extends Model
{
    use HasFactory;

    protected $table = 'voedselpakketten';

    protected $fillable = [
        'klant_id',
        'gemaakt_door_id',
        'uitgiftedatum'
    ];

    public function klant()
    {
        return $this->belongsTo(Klant::class, 'klant_id');
    }

    public function gemaaktDoor()
    {
        return $this->belongsTo(Gebruiker::class, 'gemaakt_door_id');
    }

    public function producten()
    {
        return $this->belongsToMany(Product::class, 'voedselpakket_producten', 'voedselpakket_id', 'product_id')->withPivot('aantal');
    }
}
