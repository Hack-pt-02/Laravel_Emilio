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

// ESTA ES LA RAIZ
Route::get('/', function() {

    $locals = [
        [1, "CerveBar", "La cervecería del barrio"],
        [2, "Bar Vera", "El mejor bar para beber"],
        [3, "Birra y Tapa", "Por cada bebida una tapa"],
        [4, "El bar ideal", "Para pasar tiempo con tus amigos"],
        [5, "Cervecería para llorar", "Desahogate y llora"]
    ];
    return view('locals.index', ['locals' => $locals]);
})-> name("locals.index");

// LOGIN

Route::get("/login", function() {
    return view("index", ["texto" => "usuario no autenticado"]);
})->name("login");

// DETALLE DE LA CARD

Route::get("/local/{id}", function($id) {

    $localsAux;

    $locals = [
        [1, "CerveBar", "La cervecería del barrio"],
        [2, "Bar Vera", "El mejor bar para beber"],
        [3, "Birra y Tapa", "Por cada bebida una tapa"],
        [4, "El bar ideal", "Para pasar tiempo con tus amigos"],
        [5, "Cervecería para llorar", "Desahogate y llora"]
    ];

    foreach($locals as $local) {
        if ($local[0] == $id) {
            $localsAux = $local;
        }
    }

    return view("locals.product", ["local" => $localsAux, "locals" => $locals]);

});

// PRODUCT

Route::get("/product", function() {

    $locals = [
        [1, "CerveBar", "La cervecería del barrio"],
        [2, "Bar Vera", "El mejor bar para beber"],
        [3, "Birra y Tapa", "Por cada bebida una tapa"],
        [4, "El bar ideal", "Para pasar tiempo con tus amigos"],
        [5, "Cervecería para llorar", "Desahogate y llora"]
    ];

    return view("locals.product", ["locals" => $locals]);
})->name("product");

// ABOUT

route::get("/about", function() {
    return view("about");
})->name("about");

// CONTACT

Route::get("/contact", function() {
    return view("contact");
})->name("contact");