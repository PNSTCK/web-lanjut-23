<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CategoryController;
use app\Http\Controllers\AbController;
use app\Http\Controllers\ChashierController;
use app\Http\Controllers\SupplierController;


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

Route::get('/category', [CategoryController::class, 'index'])->name('category-index');
Route::get('/category/create', [CategoryController::class, 'tambah'])->name('category-create');
Route::post('/category/store', [CategoryController::class, 'simpan'])->name('category-store');

Route::delete('/category/{id}/delete', [CategoryController::class, 'delete'])->name('category-delete');
Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category-edit');
Route::path('/category/{id}/update', [CategoryController::class, 'update'])->name('category-update');

Route::get('/chashier', [ChashierController::class, 'index'])->name('chashier-index');
Route::get('/chashier/create', [ChashierController::class, 'tambah'])->name('chashier-create');
Route::post('/chashier/store', [ChashierController::class, 'simpan'])->name('chashier-store');

Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier-index');
Route::get('/suppler/create', [SupplierController::class, 'tambah'])->name('supplier-create');
Route::post('/supplier/store', [SupplierController::class, 'simpan'])->name('chashier-store');

Route::delete('/supplier/{id}/delete', [SupplierController::class, 'delete'])->name('supplier-delete');
Route::get('/supplier/{id}/edit', [SupplierController::class, 'edit'])->name('supplier-edit');
Route::path('/supplier/{id}/update', [SupplierController::class, 'update'])->name('supplier-update');



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



