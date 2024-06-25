<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = [
        'naam',
        'voorraad',
        'streepjescode',
        'categorie_id',
        'leverancier_id',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function leverancier()
    {
        return $this->belongsTo(Leverancier::class, 'leverancier_id');
    }

    public function allergenen()
    {
        return $this->belongsToMany(Allergy::class, 'product_allergenen', 'product_id', 'allergenen_id');
    }

    public function voedselpakketten()
    {
        return $this->belongsToMany(Voedselpakket::class, 'voedselpakket_producten', 'product_id', 'voedselpakket_id');
    }
}
