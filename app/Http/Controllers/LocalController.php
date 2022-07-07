<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalController extends Controller
{

    public $locals = [
        [1, "CerveBar", "La cervecería del barrio"],
        [2, "Bar Vera", "El mejor bar para beber"],
        [3, "Birra y Tapa", "Por cada bebida una tapa"],
        [4, "El bar ideal", "Para pasar tiempo con tus amigos"],
        [5, "Cervecería para llorar", "Desahogate y llora"],
        [10, "bar Amigos","Solamente para mejores amigos"]
    ];
// about
    public function  about() {
    return view("about");
    }
// index
    public function index() {

        return view("locals.index",["locals" => $this->locals]);
    }
// cards
    public function card($id) {
        $localsAux;

        foreach($this->locals as $local) {
            if ($local[0] == $id) {
                $localsAux = $local;
            }
        }

        return view("locals.product", ["local" => $localsAux, "locals" => $this->locals]);
    }

}
