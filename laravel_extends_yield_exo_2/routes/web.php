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
    $page = "Welcome";
    return view('welcome', compact("page"));
})->name("home");

Route::get("/about", function(){
    $page = "About";
    return view("about", compact("page"));
})->name("about");

Route::get("/services", function(){
    $page = "Services";
    return view("services", compact("page"));
})->name("services");