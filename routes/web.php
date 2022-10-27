<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::get('/tambahproduk', [ProductController::class, 'tambahproduk'])->name('tambahproduk');
Route::post('/insert', [ProductController::class, 'insert'])->name('insert');

Route::get('/tampilkan/{id}', [ProductController::class, 'tampilkan'])->name('tampilkan');
Route::post('/updateproduk/{id}', [ProductController::class, 'updateproduk'])->name('updateproduk');

Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('delete');




