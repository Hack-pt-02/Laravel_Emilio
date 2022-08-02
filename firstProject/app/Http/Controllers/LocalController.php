<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;
use Illuminate\Support\Facades\DB;

class LocalController extends Controller
{
    public function index() {
        /* $locals = [
            [1, "Cervecería 1", "Este sería el contenido del artículo 1 que no es muy largo"],
            [2, "Cerverería 2", "ESte sería el contenid del artículo 2 que es el siguiente"],
            [3, "Cervecería 3", "ESte sería el contenid del artículo 3 que es la suma de los dos anteriores"],
            [5, "Cervecería 5", "Ester sería el contenido del artículo 5 que sigue la numeración de Fibonacci"],
            [8, "Cerecería 8", "Este sería el contenido del artículo 8 que ya es el último"]
        ]; */
        $locals = DB::table("locals")->get();
      return view('plt.index', ["locals" => $locals]);
    }
}
