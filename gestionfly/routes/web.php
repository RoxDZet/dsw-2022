<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VueloController;
use App\Http\Controllers\PilotoController;

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

Route::resource("pilotos", PilotoController::class);
Route::resource('vuelos', VueloController::class);
Route::get("/listado_pdf", [VueloController::class, 'listadoPdf'])->name("vuelos.listado_pdf");