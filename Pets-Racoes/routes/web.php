<?php

// use GuzzleHttp\Psr7\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;

// Route::get('/', function(Request $request){
//     $data = ["title" => "Accueil"];
//     return view('index', $data);
// })->name("index");


Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/contact', function () {
    return view('contact');
})->name("contact");


// Route::get('/services', function () {
//     return view('services');
// })->name("services");


Route::get('/login', function () {
    return view('login');
})->name("login");


Route::get('/quisomme', function () {
    return view('quisomme');
})->name("quisomme");

Route::resource('/produit', ProduitController::class);

Route::resource('/service', ServiceController::class);


//amdin
Route::group(['prefix' => 'admin'], function () {
    Route::get("/", function () {
        return view("admin.index");
    });
    Route::get("/produits", function () {
        return view("admin.index");
    });
});
