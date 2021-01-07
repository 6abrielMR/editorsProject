<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Editorial;

class EditorialController extends Controller
{
    public function index() {
        $editoriales = Editorial::orderBy('id', 'asc')->simplePaginate(10);
        return view('editorial.index', [
            'publishers' => $editoriales
        ]);
    }

    public function create() {
        return view('editorial.create');
    }

    public function save(Request $request) {
        $validate = $this->validate($request, [
            'id' => ['required', 'numeric', 'max::10'],
            'nombre' => ['required', 'string', 'max:45'],
            'sede' => ['required', 'string', 'max:45']
        ]);

        $id = $request->input('id');
        $nombre = $request->input('nombre');
        $sede = $request->input('sede');

        $publisher = new Editorial();
        $publisher->id = $id;
        $publisher->nombre = $nombre;
        $publisher->sede = $sede;

        $publisher->save();

        return redirect()->route('mainview')->with([
            'state' => true,
            'message' => 'Se creo correctamente la editorial.'
        ]);
    }
}
