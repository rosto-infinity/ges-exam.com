<?php

use App\Http\Controllers\FiliereController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("filieres")->group(function () {
    Route::get('/', [FiliereController::class, 'index'])->name('filieres.index');
    Route::get('/create', [FiliereController::class, 'create'])->name('filieres.create');
});