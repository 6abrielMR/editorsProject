<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Libro;
use App\Models\Editorial;

class LibroController extends Controller
{
    public function create() {
        $publishers = Editorial::get();
        return view('libro.create', compact('publishers'));
    }

    public function save(Request $request) {
        $validate = $this->validate($request, [
            'id' => ['required', 'string', 'max:13'],
            'editorial' => ['required', 'string', 'max:10'],
            'titulo' => ['required', 'string', 'max:45'],
            'sinopsis' => ['max:255'],
            'paginas' => ['required', 'string', 'max:45'],
        ]);

        $id = (int) $request->input('id');
        $editoriales_id = (int) $request->input('editorial');
        $titulo = $request->input('titulo');
        $sinopsis = $request->input('sinopsis');
        $paginas = $request->input('paginas');

        $book = new Libro();
        $book->ISBN = $id;
        $book->editoriales_id = $editoriales_id;
        $book->titulo = $titulo;
        $book->sinopsis = $sinopsis;
        $book->n_paginas = $paginas;

        $book->save();

        return redirect()->route('mainview')->with([
            'state' => true,
            'message' => 'Se creo correctamente el libro '.$titulo
        ]);
    }
}
