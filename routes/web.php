<?php

use App\Http\Controllers\OperacionesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZoologicoCOntroller;
use App\Http\Controllers\ZoologicoVistasController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::controller(ZoologicoCOntroller::class)->group(function(){
//     Route::get('animal/raton',"Raton");
//     Route::get('animal/gato',"Gato");
//     Route::get('animal/perro',"Perro");
//     Route::get('animal/principal',"Principal");
// });


Route::controller(ZoologicoVistasController::class)->group(function(){
    Route::get('animal/raton',"Raton");
    Route::get('animal/gato',"Gato");
    Route::get('animal/perro',"Perro");
    Route::get('animal/principal',"Principal");
});

Route::controller(OperacionesController::class)->group(function(){
    Route::get('operaciones/suma',"Suma");
    Route::get('operaciones/multiplicacion',"Multiplicacion");
    Route::get('operaciones/exponente',"Exponente");
    Route::get('operaciones/salir',"Salir");
    Route::get('operaciones/menu',"Menu");
});
