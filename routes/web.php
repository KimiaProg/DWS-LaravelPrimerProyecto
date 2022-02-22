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
Route::get('/libros/create', [LibroController::class , 'create']);
Route::post('/libros/realizarCreate', [LibroController::class , 'realizarCreate']);
Route::post('/libros/realizarUpdate', [LibroController::class , 'realizarUpdate']);
Route::get('/editorial/create', [EditorialController::class , 'create']);
Route::post('/editorial/realizarCreate', [EditorialController::class , 'realizarCreate']);
Route::get('/editorial', [EditorialController::class , 'listar']);

Route::get('/libros/update/{libro}', [LibroController::class , 'update']);
Route::get('/libros/{libro}', [LibroController::class , 'listarUno']);
Route::get('/editorial/{editorial}', [EditorialController::class , 'listarUno']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
