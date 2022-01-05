<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\EcuationController;
use App\Http\Controllers\DerivadaController;
use App\Http\Controllers\TablaController;
use App\Http\Controllers\DensidadController;
use App\Http\Controllers\VolumenController;
use App\Http\Controllers\PotenciaController;
use App\Http\Controllers\FuerzaController;
use App\Http\Controllers\PotencialController;
use App\Http\Controllers\CineticaController;
use App\Http\Controllers\LongitudController;
use App\Http\Controllers\FrecuenciaController;
use App\Http\Controllers\FrecuenciaPendularController;
use App\Http\Controllers\AlturaController;
use App\Http\Controllers\ParabolicoController;
use App\Http\Controllers\LibreController;
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
// Route::get('/multiplicar/{number?}','tabla@multiplicar');
Route::get('/multiplicar/{number?}', [TableController::class, 'multiplicacion']);
Route::get('/suma/{number1?}/{number2?}', [TableController::class, 'suma']);
Route::get('/ecuacion', [EcuationController::class, 'index'])->name('ecuacion');
Route::get('/derivada', [DerivadaController::class, 'index'])->name('derivada');
Route::get('/tabla', [TablaController::class, 'index'])->name('tabla');

Route::get('/densidad', [DensidadController::class, 'index'])->name('densidad');
Route::get('/volumen', [VolumenController::class, 'index'])->name('volumen');
Route::get('/potencia', [PotenciaController::class, 'index'])->name('potencia');
Route::get('/fuerza', [FuerzaController::class, 'index'])->name('fuerza');
Route::get('/potencial', [PotencialController::class, 'index'])->name('potencial');
Route::get('/cinetica', [CineticaController::class, 'index'])->name('cinetica');
Route::get('/longitud', [LongitudController::class, 'index'])->name('longitud');
Route::get('/frecuencia', [FrecuenciaController::class, 'index'])->name('frecuencia');
Route::get('/frecuencia-pendular', [FrecuenciaPendularController::class, 'index'])->name('frecuencia-pendular');
Route::get('/altura', [AlturaController::class, 'index'])->name('altura');
Route::get('/parabolico', [ParabolicoController::class, 'index'])->name('parabolico');
Route::get('/libre', [LibreController::class, 'index'])->name('libre');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

