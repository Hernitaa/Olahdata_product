<?php

use App\Http\Controllers\data;
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


//mahasiswa
Route::get('/', [data::class, 'index']);
Route::get('/tambahMHS', [data::class, 'createMHS']);
Route::post('/simpanMHS', [data::class, 'storeMHS']);
Route::get('/editMHS/{id}', [data::class, 'editMHS']);
Route::post('/updateMHS/{id}', [data::class, 'updateMHS']);
Route::get('/hapusMHS/{id}', [data::class, 'destroyMHS']);

//product
Route::get('/product', [data::class, 'product']);
Route::get('/tambahPRDK', [data::class, 'createPRDK']);
Route::post('/simpanPRDK', [data::class, 'storePRDK']);
Route::get('/editPRDK/{id}', [data::class, 'editPRDK']);
Route::post('/updatePRDK/{id}', [data::class, 'updatePRDK']);
Route::get('/hapusPRDK/{id}', [data::class, 'destroyPRDK']);


//transaksi
Route::get('/pembayaran', [data::class, 'pembayaran']);
Route::get('/tambahBYR', [data::class, 'createBYR']);
Route::post('/simpanBYR', [data::class, 'storeBYR']);
Route::get('/editBYR/{id}', [data::class, 'editBYR']);
Route::post('/updateBYR/{id}', [data::class, 'updateBYR']);
Route::get('/hapusBYR/{id}', [data::class, 'destroyBYR']);