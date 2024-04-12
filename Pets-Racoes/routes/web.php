<?php

// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    // dd($request);
    return view('index');
})->name("index");


Route::get('/contact', function () {
    return view('contact');
})->name("contact");


Route::get('/services', function () {
    return view('services');
})->name("services");


Route::get('/login', function () {
    return view('login');
})->name("login");


Route::get('/produits', function () {
    return view('produits');
})->name("produits");


Route::get('/quisomme', function () {
    return view('quisomme');
})->name("quisomme");


//amdin
Route::group(['prefix' => 'admin'], function () {
    Route::get("/", function () {
        return view("admin.index");
    });
    Route::get("/produits", function () {
        return view("admin.index");
    });
});
