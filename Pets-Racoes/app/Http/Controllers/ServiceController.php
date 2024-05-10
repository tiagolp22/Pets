<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        Log::info($request->url());

        try {

            $services = Service::all();

            return view("services.index", ["services" => $services, "title" => "Services"]);
        } catch (Exception $e) {

            Log::error("Erreur lors de la récupération des services : " . $e->getMessage());
            return back()->with("erreur", $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("services.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {

        $validated = $request->validated();


        $nouveauService = new Service();
        $nouveauService->fill($validated);


        if ($request->image) {

            $path = $request->image->store('services', 'public');

            $nouveauService->image = $path;
        }

        try {

            $nouveauService->save();

            return redirect()->route("service.index")->with("success", "Le service a été ajouté avec succès");
        } catch (Exception $e) {

            Log::error("Erreur lors de l'enregistrement du service : " . $e->getMessage());
            return back()->withInput()->withErrors(['save_error' => 'Erreur lors de l\'enregistrement : ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view("services.show", ["service" => $service, "title" => $service->name]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view("services.edit", ["service" => $service]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $validated = $request->validated();

        $service->fill($validated);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $service->image = $path;
        }

        try {
            $service->save();
            return redirect()->route("service.index")->with("success", "Le service a été mis à jour avec succès");
        } catch (Exception $e) {
            Log::error("Erreur lors de la mise à jour du service : " . $e->getMessage());
            return back()->withInput()->withErrors(['update_error' => 'Erreur lors de la mise à jour : ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        try {

            $service->delete();

            return redirect()->route("service.index")->with("success", "Le service a été supprimé avec succès");
        } catch (Exception $e) {

            Log::error("Erreur lors de la suppression du service : " . $e->getMessage());
            return back()->with("error", "Erreur lors de la suppression du service : " . $e->getMessage());
        }
    }
}
