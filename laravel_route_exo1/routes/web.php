<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ('Bonjour Cher Utilisateur');
});

Route::get('/message', function() {
    return "Bienvenue sur mon  site";
});

// Route::get('/{coucou}', function ($coucou) {
//     return "Bienvenue sur mon  site ${coucou}";
// });

Route::get('/welcome', function() {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/about', function(){
    $prenom = "CamCam";
    $nom = "Mcq";
    return view("about", compact("prenom", "nom"));
});