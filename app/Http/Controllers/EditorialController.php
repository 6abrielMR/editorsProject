<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorialController extends Controller
{
    public function index() {
        return view('editorial.index');
    }
}
