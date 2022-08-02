<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalController;

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

Route::get('/', [LocalController::class, "index"])->name("index");

Route::get("/local/{id}", function($id) {
    //Aquí copiamos el array

    $locals = [
        [1, "Cervecería 1", "Este sería el contenido del artículo 1 que no es muy largo"],
        [2, "Cerverería 2", "ESte sería el contenid del artículo 2 que es el siguiente"],
        [3, "Cervecería 3", "ESte sería el contenid del artículo 3 que es la suma de los dos anteriores"],
        [5, "Cervecería 5", "Ester sería el contenido del artículo 5 que sigue la numeración de Fibonacci"],
        [8, "Cerecería 8", "Este sería el contenido del artículo 8 que ya es el último"]
    ];


    $i = 0;
    $fila = -1;

    while(($fila < 0) && ($i < sizeof ($locals))) {
        if($id == $locals[$i][0]) {
            $fila = $i;
        }
        $i++;
    }

    if ($fila < 0) $fila == 0;

    return view("local_detail", ["local" => $locals[$fila]]);
});