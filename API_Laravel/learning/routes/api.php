<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('mahasiswa', 'MahasiswaController');
Route::apiResource('ukm', 'UkmController');
Route::apiResource('makanan_kantin', 'MakananKantinController');
Route::apiResource('buku_perpustakaan', 'BukuPerpustakaanController');
Route::apiResource('fasilitas_umn', 'FasilitasController');
