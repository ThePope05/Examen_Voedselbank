<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    use HasFactory;

    protected $table = 'leveranciers';

    protected $fillable = [
        'bedrijfsnaam',
        'contactpersoon',
        'adres',
        'telefoonnummer',
        'email',
    ];

    public function producten()
    {
        return $this->hasMany(Product::class, 'leverancier_id');
    }
}
