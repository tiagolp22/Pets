<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** @var Produit $produit */
        Produit::create([
            "nom"=>"Premier",
            "description" => "é uma boa racao meu vei",
            "categorie" => "Nourritures",
            "prix" => 10,
            "image" => "img.jpeg",
        ]);

        Produit::factory(20)->create();
    }
}
