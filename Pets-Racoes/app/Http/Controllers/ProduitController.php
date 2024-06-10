<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use App\Http\Requests\StoreProduitRequest;
use App\Http\Requests\UpdateProduitRequest;
use Exception;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use PhpParser\NodeVisitor\FirstFindingVisitor;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $tri = $request->query('tri', 'nom');
    $direction = $request->query('direction', 'asc');
    $prixMax = $request->query('prix-max');
    $categories = $request->query('categorie', []);
    $prixRange = $request->query('prix');
    $nom = $request->query('nom');

    $produitQuery = Produit::with('categorie')->orderBy($tri, $direction);

    if (!empty($categories)) {
        // Verifica se $categories é uma string
        if (is_string($categories)) {
            // Divide a string em um array usando vírgulas como delimitador
            $categories = explode(',', $categories);
        }

        $produitQuery->whereHas('categorie', function ($query) use ($categories) {
            $query->whereIn('nom', $categories);
        });
    }

        if ($prixRange) {
            $range = explode('-', $prixRange);
            if (count($range) == 2) {
                $produitQuery->whereBetween('prix', [(float)$range[0], (float)$range[1]]);
            } elseif ($prixRange === '50+') {
                $produitQuery->where('prix', '>', 50);
            }
        }

        if ($prixMax) {
            $produitQuery->where('prix', '<=', $prixMax);
        }

        if ($nom) {
            $produitQuery->where('nom', 'like', '%' . $nom . '%');
        }

        $produits = $produitQuery->paginate(10);

        return view('produits.index', [
            'produits' => $produits,
            'title' => 'Produits'
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('produits.create', [
            'categories' => $categories
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProduitRequest $request)
    {
        $validated = $request->validated();

        $nouveauProduit = new Produit();
        $nouveauProduit->fill($validated);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $nouveauProduit->image = $path;
        }

        try {
            $nouveauProduit->save();
            return redirect()->route("produit.index")->with("success", "Le produit été ajouté");
        } catch (Exception $e) {
            return back()->withInput()->withErrors(['save_error' => 'Erreur lors de l\'enregistrement: ' . $e->getMessage()]);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        // $produit = session()->get("produit");
        //session()->forget("produit");

        return view("produits.show", ["produit" => $produit, "title" => $produit->nom]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        $categories = Categorie::all();

        return view('produits.edit', [
            'produit' => $produit,
            'categories' => $categories,
            'title' => 'Éditer un produit'
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProduitRequest $request, Produit $produit)
    {
        $validated = $request->validated();


        $produit->fill($validated);

        if ($request->hasFile('image')) {

            if ($produit->image) {
                Storage::disk('public')->delete($produit->image);
            }

            $path = $request->file('image')->store('images', 'public');
            $produit->image = $path;
        }

        try {
            $produit->save();
            return redirect()->route("produit.index")->with("success", "Le produit a été mis à jour");
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['save_error' => 'Erreur lors de la mise à jour: ' . $e->getMessage()]);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        try {
            if ($produit->image) {
                Storage::disk('public')->delete($produit->image);
            }
            $produit->delete();
            return redirect()->route("produit.index")->with("success", "Le produit a été supprimé");
        } catch (\Exception $e) {
            return back()->with("error", "Erreur lors de la suppression: " . $e->getMessage());
        }
    }
}
