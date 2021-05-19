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

//Users
Route::get("/users", [UserController::class, "index"])->name("users");
Route::get("/users/create", [UserController::class, "create"]);
Route::post("/users/store", [UserController::class, "store"]);
Route::get("/users/{id}/edit", [UserController::class, "edit"]);
Route::post("/users/{id}/update", [UserController::class, "update"]);
Route::post("/users/{id}/delete", [UserController::class, "destroy"]);
Route::post("/users/{id}/download", [UserController::class, "download"]);

//Albums
Route::get("/albums", [UserController::class, "index"])->name("albums");
Route::get("/albums/create", [UserController::class, "create"]);
Route::post("/albums/store", [UserController::class, "store"]);
Route::get("/albums/{id}/edit", [UserController::class, "edit"]);
Route::post("/albums/{id}/update", [UserController::class, "update"]);
Route::post("/albums/{id}/delete", [UserController::class, "destroy"]);
Route::post("/albums/{id}/download", [UserController::class, "download"]);

//Photos
Route::get("/photos", [UserController::class, "index"])->name("photos");
Route::get("/photos/create", [UserController::class, "create"]);
Route::post("/photos/store", [UserController::class, "store"]);
Route::get("/photos/{id}/edit", [UserController::class, "edit"]);
Route::post("/photos/{id}/update", [UserController::class, "update"]);
Route::post("/photos/{id}/delete", [UserController::class, "destroy"]);
Route::post("/photos/{id}/download", [UserController::class, "download"]);