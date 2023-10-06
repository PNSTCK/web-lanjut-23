<?php

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
    return view ('welcome');
});

Route::get('/', function () {

    $array_nama = ["risa", "rudi", "bambang"];

    return view ('universitas.mahasiswa')->with('mahasiswa', $array_nama);
});

Route::get('/admin', function () {
    return view ('dashboard');
});
