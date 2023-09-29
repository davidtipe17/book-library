<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LibroController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/generos', [GeneroController::class, 'index'])->name('genero');
Route::get('/generos/mostrar/{id}', [GeneroController::class, 'mostrar'])->name('genero.mostrar');
Route::get('/generos/nuevo', [GeneroController::class, 'nuevo'])->name('genero.nuevo');
Route::post('/genero/guardar', [GeneroController::class, 'guardar'])->name('genero.guardar');
Route::get('/generos/eliminar/{id}', [GeneroController::class, 'eliminar'])->name('genero.eliminar');
Route::get('/libros/listar', [LibroController::class, 'index'])->name('libro.index');
Route::get('/libros/nuevo', [LibroController::class, 'nuevo'])->name('libro.nuevo');
Route::post('/libros/guardar', [LibroController::class, 'guardar'])->name('libro.guardar');
