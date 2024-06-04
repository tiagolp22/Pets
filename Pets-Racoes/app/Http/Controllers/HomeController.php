<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Middleware;

class HomeController extends Controller
{
    // public function __construct(){
    //     $this->middleware("auth")->except(["index", 'show']);
    // }
    /**
     * Display the index page with a list of produits.
     */
    public function index(Request $request)
    {
        $tri = $request->query('tri', 'nom');
        $direction = $request->query('direction', 'asc');
        $prixMax = $request->query('prix-max');

        $produitQuery = Produit::with('categorie')->orderBy($tri, $direction);

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
