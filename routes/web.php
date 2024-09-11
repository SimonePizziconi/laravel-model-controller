<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/Serie-tv', [PageController::class, 'serieTv'])->name('serietv');
Route::get('/Dettagli/{id}', [PageController::class, 'details'])->name('details');
