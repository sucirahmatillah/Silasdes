<?php

use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\User\Auth\ForgotPasswordController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\LogoutController;
use App\Http\Controllers\User\Auth\ResetPasswordController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\KantorDesaController;
use App\Http\Controllers\User\PendudukController;
use App\Http\Controllers\User\PenggunaController;
use App\Http\Controllers\User\PersetujuanController;
use App\Http\Controllers\User\SuratController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->name('user.')->group(function () {

    Route::middleware('guest:user')->group(function () {
        Route::controller(LoginController::class)->group(function () {
            Route::get('login', 'login')->name('login');
            Route::post('authenticate', 'authenticate')->name('authenticate');
        });
        Route::controller(ForgotPasswordController::class)->group(function () {
            Route::get('/forgot-password', 'passwordRequest')->name('password.request');
            Route::post('/forgot-password', 'passwordEmail')->name('password.email');
        });
        Route::controller(ResetPasswordController::class)->group(function () {
            Route::get('/reset-password/{token}', 'passwordReset')->name('password.reset');
            Route::post('/reset-password', 'passwordUpdate')->name('password.update');
        });
    });

    Route::middleware('auth:user')->group(function () {
        Route::get('/', HomeController::class)->name('home');

        Route::controller(KantorDesaController::class)->prefix('kantor-desa')->name('kantor-desa.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('update', 'update')->name('update');
        });

        Route::resource('/pengguna', PenggunaController::class)->except('show');

        Route::resource('/penduduk', PendudukController::class);

        Route::controller(SuratController::class)->prefix('surat')->name('surat.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create/{jenis_surat}', 'create')->name('create');
            Route::post('/store/{jenis_surat}', 'store')->name('store');
            Route::get('/edit/{jenis_surat}/{surat}', 'edit')->name('edit');
            Route::put('/update/{jenis_surat}/{surat}', 'update')->name('update');
            Route::get('/{surat}', 'show')->name('show');
            Route::delete('/destroy/{surat}', 'destroy')->name('destroy');
            Route::post('/status/{surat}', 'status')->name('status');
            Route::get('/print/{surat}', 'print')->name('print');
        });

        Route::controller(PersetujuanController::class)->prefix('persetujuan')->name('persetujuan.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/{surat}', 'show')->name('show');
            Route::post('/setujui/{surat}', 'setujui')->name('setujui');
        });

        Route::controller(AccountController::class)->prefix('account')->name('account.')->group(function () {
            Route::get('/profile', 'profileEdit')->name('profile.edit');
            Route::post('/profile/update', 'profileUpdate')->name('profile.update');
            Route::get('/password', 'passwordEdit')->name('password.edit');
            Route::post('/password/update', 'passwordUpdate')->name('password.update');
        });

        Route::post('logout', LogoutController::class)->name('logout');
    });
});
