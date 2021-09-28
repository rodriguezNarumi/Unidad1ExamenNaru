<?php
use App\Http\Controllers\welcomController;
use App\Http\Controllers\vistasBladeController;
use App\Http\Controllers\vistasController;
use App\Http\Controllers\rutasController;
use App\Http\Controllers\instalacionController;
use App\Http\Controllers\datosController;
use App\Http\Controllers\controladoresController;
use App\Http\Controllers\vistaprincipal;
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

Route::get('/welcome', welcomController::class);
Route::get('/vistaprincipal', [VistaPrincipalController::class, 'vistaprincipal']);
Route::get('/vistasBlade', [vistasBladeController::class, 'vistasBlade']);
Route::get('/vistas',  [vistasController::class, 'vistas']);
Route::get('/rutas', [rutasController::class, 'rutas']);
Route::get('/instalacion',  [instalacionController::class, 'instalacion']);
Route::get('/datos',  [datosController::class, 'datos']);
Route::get('/controladores', [controladoresController::class, 'controladores']);
