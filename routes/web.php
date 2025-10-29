<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DetailUMKMController;
use Illuminate\Support\Facades\Route;



Route::get('/', [LandingController::class, 'index']);

Route::get('/detailartikel', [ArtikelController::class, 'detailartikel'])->name('artikel.detail');;
Route::get('/detailumkm', [DetailUMKMController::class, 'detailumkm'])->name('umkm.detail');;

Route::get('/katalog', [ProdukController::class, 'katalog'])->name('produk.katalog');
Route::get('/produk/{slug}', [ProdukController::class, 'detail'])->name('produk.detail');

Route::get('/admin', function () {
    return view('admin.auth.login');
})->name('admin.login');

Route::get('/admin/forgot-password', function () {
    return view('admin.auth.forgot-password');
})->name('admin.forgot-password');

Route::get('/admin/otp-verification', function () {
    return view('admin.auth.otp-verification');
})->name('admin.otp-verification');

Route::get('/admin/reset-password', function () {
    return view('admin.auth.reset-password');
})->name('admin.reset-password');

Route::get('/admin/login-again', function () {
    return view('admin.auth.login-again');
})->name('admin.login-again');
