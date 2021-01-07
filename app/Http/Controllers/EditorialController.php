<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Editorial;

class EditorialController extends Controller
{
    public function index() {
        $publishers = Editorial::orderBy('id', 'asc')->simplePaginate(10);
        return view('editorial.index', compact('publishers'));
    }

    public function create() {
        return view('editorial.create');
    }

    public function save(Request $request) {
        $validate = $this->validate($request, [
            'id' => ['required', 'string', 'max:10'],
            'nombre' => ['required', 'string', 'max:45'],
            'sede' => ['required', 'string', 'max:45']
        ]);

        $id = $request->input('id');
        $nombre = $request->input('nombre');
        $sede = $request->input('sede');

        $publisher = new Editorial();
        $publisher->id = (int) $id;
        $publisher->nombre = $nombre;
        $publisher->sede = $sede;

        $publisher->save();

        return redirect()->route('mainview')->with([
            'state' => true,
            'message' => 'Se creo correctamente la editorial.'
        ]);
    }

    public function list($id) {
        $publisher = Editorial::where('id', '=', $id)->get()[0];
        return view('editorial.lista', compact('publisher'));
    }
}
