<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderUserController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/tentang', [HomeController::class, 'tentang']);
Route::get('/produk', [HomeController::class, 'produk']);
Route::get('/produk/{id}', [HomeController::class, 'produkdetail']);
// Route::get('/produkdetail2', [HomeController::class, 'produkdetail2']);
Route::get('/kategori', [HomeController::class, 'kategori']);
Route::get('/kategori/{nama}', [HomeController::class, 'kategoridetail']);

Route::get('/cart', [CartController::class, 'index']);
Route::get('/cart/add/{id}', [CartController::class, 'add']);
Route::get('/cart/checkout', [CartController::class, 'checkout']);
Route::get('/cart/delete/{id}', [CartController::class, 'delete']);

Route::get('/order', [OrderUserController::class, 'index']);

Route::get('/profil', [ProfilController::class, 'index'])
    ->name('profil.index');

Route::patch('/profil/update/{id}', [ProfilController::class, 'update'])
    ->name('profil.update');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])
        ->name('admin')->middleware('role:admin');

    Route::get('/profil', [\App\Http\Controllers\ProfilController::class, 'index'])
        ->name('admin.profil.index')->middleware('role:admin');
    Route::patch('/profil/update/{id}', [\App\Http\Controllers\ProfilController::class, 'update'])
        ->name('admin.profil.update')->middleware('role:admin');

    Route::resource('/kategori', \App\Http\Controllers\KategoriController::class)
        ->middleware('role:admin');

    //Tambahan route package Produk
    Route::resource('/produk', \App\Http\Controllers\ProdukController::class);

    Route::get('/order', [\App\Http\Controllers\OrderController::class, 'index'])
        ->name('admin.order.index')->middleware('role:admin');
    Route::get('/order/{id}/kirim', [\App\Http\Controllers\OrderController::class, 'kirim'])
        ->name('admin.order.kirim')->middleware('role:admin');
    Route::get('/order/{id}/selesai', [\App\Http\Controllers\OrderController::class, 'selesai'])
        ->name('admin.order.selesai')->middleware('role:admin');
    Route::get('/order/{id}/cancel', [\App\Http\Controllers\OrderController::class, 'cancel'])
        ->name('admin.order.cancel')->middleware('role:admin');

    Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])
        ->name('admin')->middleware('role:admin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
