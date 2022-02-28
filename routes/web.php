<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\PDFController;
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
Route::get('/home', function(){
    return view('layouts.index');
});
Route::post('/libros/enviarCorreo', [SendEmailController::class, 'enviarCorreo']);
Route::get('/libros/listarPeticiones', [SendEmailController::class, 'listarPeticiones'])->middleware(['auth'])->name('listarPeticiones');
Route::get('/libros/solicitar', [SendEmailController::class, 'solicitar']);

Route::get('/libros', [LibroController::class , 'listar']);
Route::get('/libros/create', [LibroController::class , 'create'])->middleware(['auth'])->name('create');
Route::post('/libros/realizarCreate', [LibroController::class , 'realizarCreate']);
Route::post('/libros/realizarUpdate', [LibroController::class , 'realizarUpdate']);
Route::get('/editorial/create', [EditorialController::class , 'create'])->middleware(['auth'])->name('create');
Route::post('/editorial/realizarCreate', [EditorialController::class , 'realizarCreate']);
Route::get('/editorial', [EditorialController::class , 'listar'])->middleware(['auth'])->name('listar');

Route::get('/libros/update/{libro}', [LibroController::class , 'update'])->middleware(['auth'])->name('update');
Route::get('/libros/{libro}', [LibroController::class , 'listarUno'])->middleware(['auth'])->name('listarUno');
Route::get('/editorial/{editorial}', [EditorialController::class , 'listarUno'])->middleware(['auth'])->name('listarUno');
Route::get('/createPDFLibro', [PDFController::class, 'pdf']);
Route::get('/createPDFLibro/{libro}', [PDFController::class, 'pdf']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
