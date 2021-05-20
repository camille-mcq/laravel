<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
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
    $activepage = "welcome";
    return view('welcome', compact("activepage"));
});

Route::resource('/photos', PhotoController::class);
Route::resource('/albums', AlbumController::class );

// faire php artisan route:list pour voir la liste