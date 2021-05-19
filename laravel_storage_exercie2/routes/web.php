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
    return view('welcome');
});
Route::get("/users", [UserController::class, "index"])->name("users");

// Route delete

Route::post("/users/{id}/delete", [UserController::class, 'destroy']);

// Route edit

Route::get("/users/{id}/edit", [UserController::class, "edit"]);

// Route update

Route::post("/users/{id}/update", [UserController::class, "update"]);

// Route create

Route::get("/users/create", [UserController::class, "create"]);

// Route store

Route::post("/users/store", [UserController::class, "store"]);

// ROUTES SERVICES


// Route index

Route::get("/services", [ServiceController::class, "index"])->name("services");

// Route delete

Route::post("/services/{id}/delete", [ServiceController::class, 'destroy']);

// Route edit

Route::get("/services/{id}/edit", [ServiceController::class, "edit"]);

// Route update

Route::post("/services/{id}/update", [ServiceController::class, "update"]);

// Route create

Route::get("/services/create", [ServiceController::class, "create"]);

// Route store

Route::post("/services/store", [ServiceController::class, "store"]);
// ROUTES PORTFOLIOS


// Route index

Route::get("/portfolios", [PortfolioController::class, "index"])->name("portfolios");

// Route delete

Route::post("/portfolios/{id}/delete", [PortfolioController::class, 'destroy']);

// Route edit

Route::get("/portfolios/{id}/edit", [PortfolioController::class, "edit"]);

// Route update

Route::post("/portfolios/{id}/update", [PortfolioController::class, "update"]);

// Route create

Route::get("/portfolios/create", [PortfolioController::class, "create"]);

// Route store

Route::post("/portfolios/store", [PortfolioController::class, "store"]);
// ROUTES GALERIES


// Route index

Route::get("/galeries", [GalerieController::class, "index"])->name("galeries");


// Route delete

Route::post("/galeries/{id}/delete", [GalerieController::class, 'destroy']);

// Route edit

Route::get("/galeries/{id}/edit", [GalerieController::class, "edit"]);

// Route update

Route::post("/galeries/{id}/update", [GalerieController::class, "update"]);

// Route create

Route::get("/galeries/create", [GalerieController::class, "create"]);

// Route store

Route::post("/galeries/store", [GalerieController::class, "store"]);
// ROUTES CHARACTERISTIQUES


// Route index

Route::get("/characteristiques", [CharacteristiqueController::class, "index"])->name("characteristiques");


// Route delete

Route::post("/characteristiques/{id}/delete", [CharacteristiqueController::class, 'destroy']);

// Route edit

Route::get("/characteristiques/{id}/edit", [CharacteristiqueController::class, "edit"]);

// Route update

Route::post("/characteristiques/{id}/update", [CharacteristiqueController::class, "update"]);

// Route create

Route::get("/characteristiques/create", [CharacteristiqueController::class, "create"]);

// Route store

Route::post("/characteristiques/store", [CharacteristiqueController::class, "store"]);