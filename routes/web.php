<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EditorialController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros', [LibroController::class , 'listar']);
Route::get('/libros/{libro}', [LibroController::class , 'listarUno']);
Route::get('/libros/create', [LibroController::class , 'create']);
Route::get('/libros/update', [LibroController::class , 'update']);
Route::get('/editorial/create', [EditorialController::class , 'create']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
