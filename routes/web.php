<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManajerController;
use App\Http\Controllers\PemesananController;
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

// Login
Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

// Pemesanan
Route::get('/admin/pemesanan', [PemesananController::class, 'index']);
Route::get('/createPemesanan', [PemesananController::class, 'createView']);
Route::post('/createPemesanan',[PemesananController::class, 'create']);

// Manajer
Route::get('/manajer/pesanan', [ManajerController::class, 'index']);
Route::post('/manajer/pesanan/{id}', [ManajerController::class, 'setuju']);
