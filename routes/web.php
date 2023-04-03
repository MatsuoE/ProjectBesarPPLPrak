<?php

use App\Http\Controllers\susunanMKController;
use App\Http\Controllers\organisasiMKController;
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
Route::get('/', [susunanMKController::class, 'index']);
Route::get('/susunanmk', [susunanMKController::class, 'index']);
Route::get('/organisasimk', [organisasiMKController::class, 'index']);
Route::resource('susunanMK', susunanMKController::class);
