<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneroController;
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
Route::get('/genero/nuevo', [GeneroController::class, 'nuevo'])->name('genero.nuevo');
Route::post('/genero/guardar', [GeneroController::class, 'guardar'])->name('genero.guardar');
