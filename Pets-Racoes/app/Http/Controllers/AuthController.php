<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    // Affiche le formulaire de connexion
    public function login()
    {
        //User::create(["name"=>"admin", "email"=>"admin@test.com", "password"=>Hash::make("12345")]);
        return view("auth.login");
    }

    // Gère la connexion avec le backend
    public function authenticate(AuthLoginRequest $request)
    {
        $credentials = $request->validated();
        // On essaie de se connecter
        if (auth()->attempt($credentials)) {
            session()->regenerate();
            return redirect()->intended()->with("success", "Vous êtes connecté");
        } else {
            // On retourne au formulaire avec des erreurs
            return back()->withErrors(["password" => "Identifiants invalides"])->withInput($credentials);
        }
    }

    // Logout de l'utilisateur
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

    // Redirige l'utilisateur vers le fournisseur (GitHub)
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    // Obtient les informations de l'utilisateur depuis le fournisseur (GitHub)
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();


        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            auth()->login($existingUser);
        } else {

            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make('password'),
            ]);

            auth()->login($newUser);
        }

        return redirect()->intended('/')->with('success', 'Conectado com sucesso usando GitHub!');
    }
}
