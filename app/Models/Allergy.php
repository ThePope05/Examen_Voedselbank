<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    use HasFactory;

    protected $table = 'allergenen';

    protected $fillable = [
        'naam',
        'beschrijving',
    ];

    public function producten()
    {
        return $this->belongsToMany(Product::class, 'product_allergie', 'allergenen_id', 'product_id');
    }

    public function klanten()
    {
        return $this->belongsToMany(Klant::class, 'klanten_allergenen', 'allergie_id', 'klant_id');
    }
}
