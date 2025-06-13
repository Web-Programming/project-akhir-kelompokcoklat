<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    if (auth()) {
        return redirect()->route('admin.index');
    }
    return redirect()->route('login');
})->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::prefix('admin')->middleware('admin.auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/produk', [AdminController::class, 'produk'])->name('admin.produk');
    Route::post('/produk', [AdminController::class, 'produkStore'])->name('admin.produk.store');
    Route::get('/edit-produk/{id}', [AdminController::class, 'produkEdit'])->name('admin.edit_produk'); // Pastikan nama rute ini
    Route::patch('/produk/{id}', [AdminController::class, 'produkUpdate'])->name('admin.produk.update');
    Route::delete('/produk/{id}', [AdminController::class, 'produkDestroy'])->name('admin.produk.destroy');
    Route::get('/pesanan', [AdminController::class, 'pesanan'])->name('admin.pesanan');
    Route::patch('/pesanan/{id}', [AdminController::class, 'pesananUpdate'])->name('admin.pesanan.update');
    Route::get('/kategori', [AdminController::class, 'kategori'])->name('admin.kategori');
    Route::post('/kategori', [AdminController::class, 'kategoriStore'])->name('admin.kategori.store');
    Route::get('/kategori-detail/{id}', [AdminController::class, 'kategoriDetail'])->name('admin.kategori.detail');
    Route::patch('/kategori/{id}', [AdminController::class, 'kategoriUpdate'])->name('admin.kategori.update');
    Route::delete('/kategori/{id}', [AdminController::class, 'kategoriDestroy'])->name('admin.kategori.destroy');
    Route::get('/testi', [AdminController::class, 'testi'])->name('admin.testi');
    Route::post('/testi/delete', [AdminController::class, 'testiDelete'])->name('admin.testi.delete');
    Route::get('/user', [AdminController::class, 'user'])->name('admin.user');
    Route::delete('/user/{id}', [AdminController::class, 'userDestroy'])->name('admin.user.destroy');
    Route::get('/tambah-produk', [AdminController::class, 'tambahProduk'])->name('admin.tambah_produk');
});

Route::get('/admin/check-new-orders', [AdminController::class, 'checkNewOrders'])->name('admin.check_new_orders');
