<?php

use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\SustentanteController;
use App\Models\Sustentante;
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

Route::get('/inicio', [AfiliadoController::class, 'index'])->name('afiliado.inicio');
Route::post('/inicio', [AfiliadoController::class, 'store'])->name('afiliado.store');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login/iniciar-sesion', [LoginController::class, 'index'])->name('login.iniciar');
Route::post('/login/iniciar-sesion', [LoginController::class, 'store'])->name('login.store');

Route::get('/sesion/iniciar', [SesionController::class, 'index'])->name('sesion.iniciar');

Route::get('/sustentante/inicio', [SustentanteController::class, 'index'])->name('sustentante.inicio');
Route::get('/sustentante-data', [SustentanteController::class, 'getData'])->name('sustentante.data');
Route::get('/sustentante/registrarse/{afiliado}', [SustentanteController::class, 'show'])->name('sustentante.registrarse');
Route::post('/sustentante/registrarse', [SustentanteController::class, 'store']);




