<?php

use App\Http\Controllers\HomeController;
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
// Route::get('/profil/update/{id}', [ProfilController::class, 'update']);
Route::resource('/profil', ProfilController::class);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])
        ->name('admin')->middleware('role:admin');
    Route::get('/profil', [\App\Http\Controllers\ProfilController::class, 'index'])
        ->name('admin')->middleware('role:admin');
    Route::get('/kategori', [\App\Http\Controllers\KategoriController::class, 'index'])
        ->name('admin')->middleware('role:admin');
    Route::get('/produk', [\App\Http\Controllers\ProdukController::class, 'index'])
        ->name('admin')->middleware('role:admin');
    Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])
        ->name('admin')->middleware('role:admin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
