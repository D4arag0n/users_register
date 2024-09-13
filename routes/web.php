<?php

use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\SustentanteController;
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

Route::get('/', function () {
    return view('inicio');
});

Route::post('/', [AfiliadoController::class, 'store'])->name('afiliado.store');

Route::get('/sustentante/registrarse/{afiliado}', [SustentanteController::class, 'show'])->name('sustentante.registrarse');
route::post('/sustentante/registrarse', [SustentanteController::class, 'store']);
