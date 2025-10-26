<?php

use Illuminate\Support\Facades\Route;

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