<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Http\Requests\StoreProduitRequest;
use App\Http\Requests\UpdateProduitRequest;
use Exception;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $nouveauProduit = new Produit();

        session()->put("panier", ["produit", $nouveauProduit]);
        // session()->flash("panier", ["produit", $nouveauProduit]); uma pagina apenas.


        Log::info($request->url());
        Log::warning("message");

        try{

        }catch(Exception $e){
            Log::error("error");
            return back()->with("erreur", $e->getMessage());
        }
        // On ecupere le queryString de la requete donc de l`url Ex: www.petsracoes.com?tri=mon&direction=asc
        $tri = $request->query('tri', 'nom');
        $direction = $request->query('direction', 'asc');
        $prixMax = $request->query('prix-max');

        //query demare une demande au modele et doit finir avec get()
        $produitQuery = Produit::query();
        $produitQuery->orderBy($tri, $direction);


        if($prixMax){
           $produitQuery->where("prix", "<", $prixMax);
    }


    $produits = $produitQuery->get();


    return view("produits.index", ["produits" => $produits, "title" => "Produits"]);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("produits.create");
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
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['save_error' => 'Erreur lors de l\'enregistrement: ' . $e->getMessage()]);
        }

    }


    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        $produit = session()->get("produit");
        //session()->forget("produit");

        return view("produit",["produit"=>$produit, "title"=>$produit->nom]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProduitRequest $request, Produit $produit)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        //
    }
}
