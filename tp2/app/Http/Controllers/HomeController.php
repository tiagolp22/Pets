<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the index page with a list of produits.
     */
    public function index(Request $request)
    {
        $tri = $request->query('tri', 'nom');
        $direction = $request->query('direction', 'asc');
        $prixMax = $request->query('prix-max');

        $produitQuery = Produit::query();
        $produitQuery->orderBy($tri, $direction);

        if ($prixMax) {
            $produitQuery->where('prix', '<', $prixMax);
        }

        $produits = $produitQuery->get();

        return view('index', [
            'produits' => $produits,
            'title' => 'Accueil'
        ]);
    }
}
