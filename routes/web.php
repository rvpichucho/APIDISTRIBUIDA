<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\EcuationController;
use App\Http\Controllers\DerivadaController;

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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

