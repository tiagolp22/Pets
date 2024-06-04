<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //affiche le formulaire de connexion
    public function login()
    {

        //User::create(["name"=>"admin", "email"=>"admin@test.com", "password"=>Hash::make("12345")]);
        return view("auth.login");
    }
    //gere la connexion avec le backend
    public function authenticate(AuthLoginRequest $request)
    {
        $credentials = $request->validated();
        //On essaie de se connecter
        if (auth()->attempt($credentials)) {
            session()->regenerate();
            return redirect()->intended()->with("success", "Vous êtes connecté");
        } else {
            //On retourne au formulaire avec des erreurs
            return back()->withErrors(["password" => "Identifiants invalides"])->withInput($credentials);
        }
    }


    public function logout()
    {
        auth()->logout();
        session()->flush();
        return redirect()->route("home")->with("success", "Vous avez été déconnecté");
    }


    // Affiche le formulaire de création de compte
    public function register()
    {
        // Afficher le formulaire de création de compte
    }


    // Enregistre l'utilisateur dans la BDD
    public function store()
    {
        // Valider les données avec un FormRequest
        // Hasher le mot de passe
        // Créer l'utilisateur
        // User::create(["name"=>"Maxime", "email"=>"admin@email.com","password"=>Hash::make("patate")]);
        // Rediriger

    }
}
