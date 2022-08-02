<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LocalController extends Controller
{
    public function index() {
        $locals = Local::paginate(4);
        return view('plt.index', ["locals" => $locals]);
    }

    public function show ($id) {
        $objLocal = Local::findOrFail($id);
        //($objLocal);
        return view ('local_detail', ['local' => $objLocal]);
    }

    public function create () {
        return view("locals.create");
    }

    public function store (Request $request) {
        $img = Storage::url($request->file("img")->store("public/brewery"));
        Local::create([
            'name' => $request->name,
            'description' => $request->description,
            'img' => $img
        ])->saveOrFail();

        return redirect()->route("index")->with('success', 'tu local se ha cargado correctamente');
    }
}
