<?php

use Illuminate\Support\Facades\Route;
// use app\Http\Controllers\CategoryController;
use app\Http\Controllers\AbController;


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

Route::get('/category', [app\Http\Controllers\CategoryController::class, 'index'])->name('category-index');
Route::get('/category/create', [app\Http\Controllers\CategoryController::class, 'tambah'])->name('category-create');
Route::post('/category/store', [app\Http\Controllers\CategoryController::class, 'simpan'])->name('category-store');

Route::get('/dashboard', function () {
    return view ('dashboard');
})->name('dashboard');

// Route::get('ab', [AbController::class, 'index'])->name('ab');

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/', function () {

    $array_nama = ["risa", "rudi", "bambang"];

    return view ('universitas.mahasiswa')->with('mahasiswa', $array_nama);
});



