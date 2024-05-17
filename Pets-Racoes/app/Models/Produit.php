<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = array("nom", "description", "prix", "image", "actif");

    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }
}


