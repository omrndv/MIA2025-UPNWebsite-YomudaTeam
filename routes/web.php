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

// ===============================
// ADMIN DASHBOARD (Sidebar Layout)
// ===============================
Route::prefix('admin/dashboard')->group(function () {
    // Default redirect ke UMKM
    Route::get('/', function () {
        return redirect()->route('admin.umkm');
    });

    Route::get('/umkm', function () {
        return view('admin.dashboard.umkm');
    })->name('admin.umkm');

    Route::get('/produk', function () {
        return view('admin.dashboard.produk');
    })->name('admin.produk');

    Route::get('/artikel', function () {
        return view('admin.dashboard.artikel');
    })->name('admin.artikel');

    Route::get('/akun', function () {
        return view('admin.dashboard.akun');
    })->name('admin.akun');
});

// ===============================
// LOGOUT ADMIN (sementara redirect ke login)
// ===============================
Route::get('/admin/logout', function () {
    return redirect()->route('admin.login');
})->name('admin.logout');