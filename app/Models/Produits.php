<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produits extends Model
{
    use HasFactory;

    protected $fillable = [
        "id", "nom_produit", "lieu", "jour", "date", "heure", "prix_debut", "prix_fin", "id_category"
    ];

    public function categories(): HasMany 
    {
        return $this->hasMany(categories::class);
    }
}
