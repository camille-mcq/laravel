<?php

use App\Http\Controllers\EquipeController;
use App\Http\Controllers\JoueurController;
use App\Models\Continent;
use App\Models\Equipe;
use App\Models\Genre;
use App\Models\Joueur;
use App\Models\Role;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Constraint\IsTrue;

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
    $genres = Genre::all();
    $joueurs = Joueur::all()->shuffle();
    $equipes = Equipe::all()->shuffle();
    $roles = Role::all();

    return view('welcome', compact("equipes", "joueurs", "genres", "roles"));
})->name("home");

Route::get("/backoffice", function(){
    return view("welcome2");
})->name("backoffice");

// Equipes
Route::resource("/equipes", EquipeController::class);

// Joueurs
Route::resource("/joueurs", JoueurController::class);