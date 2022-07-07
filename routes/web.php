<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

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

// RAIZ
Route::get('/', [LocalController::class, "index"])-> name("index");

// LOGIN

Route::get("/login", function() {
    return view("index", ["texto" => "usuario no autenticado"]);
})->name("login");

// DETALLE DE LA CARD

Route::get("/local/{id}", [LocalController::class, "card"]);

// ABOUT

route::get("/about",[AboutController::class, "show"])->name("about");

// CONTACTO

Route::get("/contact", [ContactController::class, "show"])->name("contact");