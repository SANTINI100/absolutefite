<?php

use Illuminate\Support\Facades\Route;
// aca le pedimos que use el controlardor de clases
use App\Http\Controllers\ClasesController;
// aca le pedimos que use el controlador de entrenador
use App\Http\Controllers\EntrenadorController;
// aca le pedimos que use el controlador de inscripciones
use App\Http\Controllers\InscripcionController;
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
// esta es la ruta de inicio
Route::get('/', function () {
    return view('home');
});


Auth::routes();
// esta e la rurta que se utiliza para calendario
Route::get('/calendario', [App\Http\Controllers\ClasesController::class, 'index'])
->middleware('auth')
->name('calendario');
// esta es la ruta de calendario ara crear las clases
Route::post('/calendario',[ClasesController::class, 'store']);

// 
Route::put('incribir-clase/{id}',[InscripcionController::class, 'update']);

Route::put('actualizar-clase/{id}',[ClasesController::class, 'update']);
// esta es la ruta de clasendario para eiminar las clases
Route::delete('Eliminar-clase/{id}',[ClasesController::class, 'destroy']);
// esta es la ruta que se utiliza para entrenadores
Route::get('/entrenador', [App\Http\Controllers\EntrenadorController::class, 'index'])
->middleware('auth')
->name('entrenador');
// esta ruta es para crear a los entrenadores
Route::post('/entrenador',[EntrenadorController::class, 'store']);

// esta es la ruta de inicio
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
