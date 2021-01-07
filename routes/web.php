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

use App\Models\Editorial;

Route::get('/', [App\Http\Controllers\EditorialController::class, 'index'])->name('mainview');
Route::get('/editorial/crear', [App\Http\Controllers\EditorialController::class, 'create'])->name('editorial.create');
Route::get('/libro/crear', [App\Http\Controllers\LibroController::class, 'create'])->name('libro.create');

// hidden routes
Route::post('/editorial/save-publisher', [App\Http\Controllers\EditorialController::class, 'save'])->name('editorial.save');
Route::post('/libro/save-book', [App\Http\Controllers\LibroController::class, 'save'])->name('libro.save');
Route::get('/editorial/libras/{id}', [App\Http\Controllers\EditorialController::class, 'list'])->name('libro.list');