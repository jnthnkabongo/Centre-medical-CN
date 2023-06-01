<?php

use App\Http\Controllers\controllerMedecin;
use App\Http\Controllers\InfirmierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [InfirmierController::class, 'index'])->name('index-infirmier');
Route::get('/medecin-dashboard', [controllerMedecin::class, 'index'])->name('index-medecin');
