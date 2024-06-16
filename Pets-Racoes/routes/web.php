<?php

// use GuzzleHttp\Psr7\Request;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\PaymentController;
use Laravel\Socialite\Facades\Socialite;


Route::get('/locale', function (Request $request) {
    $query = $request->query();
    if (isset($query['lang'])) {
        $lang = $query['lang'];
    } else {
        $lang =  "en";
    }
    session()->put('locale', $lang);
    return back();
})->name('locale');


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/contact', function () {
    return view('contact');
})->name("contact");


Route::get('/quisomme', function () {
    return view('quisomme');
})->name("quisomme");


Route::resource('/produit', ProduitController::class);


Route::resource('/service', ServiceController::class);


Route::get("/connexion", [AuthController::class, "login"])->name("login");
Route::post("/connexion", [AuthController::class, "authenticate"])->name("authenticate");
Route::get("/deconnexion", [AuthController::class, "logout"])->name("logout");


//amdin
Route::group(['prefix' => 'admin'], function () {
    Route::get("/", function () {
        return view("admin.index");
    });
    Route::get("/produits", function () {
        return view("admin.index");
    });
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/linkstorage', function(){
    Artisan::call('storage:link');
});


Route::get('/produits/{produit}/checkout', [PaymentController::class, 'showCheckoutForm'])->name('checkout.form');
Route::post('/produits/{produit}/payment', [PaymentController::class, 'processPayment'])->name('payment.process');


Route::get('/auth/{provider}', [AuthController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [AuthController::class, 'handleProviderCallback']);
