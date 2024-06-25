<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{
    use HasFactory;

    protected $table = 'klanten';

    protected $fillable = [
        'naam',
        'email',
        'telefoonnummer',
        'adres',
        'volwassenen',
        'kinderen',
        'babies',
    ];

    public function allergenen()
    {
        return $this->belongsToMany(Allergy::class, 'klanten_allergenen', 'gebruiker_id', 'allergenen_id');
    }

    public function voedselpakketten()
    {
        return $this->hasMany(Voedselpakket::class, 'klant_id');
    }
}
