<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

// READ delle cRud
Route::get('/comics', [ComicController::class, "index"])->name("comics.index");

//Create delle Crud

Route::get('/comics/create', [ComicController::class, "create"])->name("comics.create");

//Show delle READ delle cRud
Route::get('/comics/{id}', [ComicController::class, "show"])->name("comics.show");

Route::post("/comics", [ComicController::class, "store"])->name("comics.store");


