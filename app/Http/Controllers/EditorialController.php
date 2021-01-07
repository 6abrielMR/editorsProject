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
}
