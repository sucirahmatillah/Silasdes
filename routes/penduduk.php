<?php

use App\Http\Controllers\Penduduk\AccountController;
use App\Http\Controllers\Penduduk\Auth\ForgotPasswordController;
use App\Http\Controllers\Penduduk\Auth\LoginController;
use App\Http\Controllers\Penduduk\Auth\LogoutController;
use App\Http\Controllers\Penduduk\Auth\RegisterController;
use App\Http\Controllers\Penduduk\Auth\ResetPasswordController;
use App\Http\Controllers\Penduduk\Auth\VerificationController;
use App\Http\Controllers\Penduduk\CetakController;
use App\Http\Controllers\Penduduk\HomeController;
use App\Http\Controllers\Penduduk\SuratController;
use Illuminate\Support\Facades\Route;

Route::prefix('penduduk')->name('penduduk.')->group(function () {

    Route::middleware('guest:penduduk')->group(function () {
        Route::controller(LoginController::class)->group(function () {
            Route::get('login', 'login')->name('login');
            Route::post('authenticate', 'authenticate')->name('authenticate');
        });
        Route::controller(RegisterController::class)->group(function () {
            Route::get('register', 'register')->name('register');
            Route::post('registration', 'registration')->name('registration');
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

    Route::middleware('auth:penduduk')->group(function () {
        Route::controller(VerificationController::class)->group(function () {
            Route::get('/verification/email', 'verificationNotice')->name('verification.notice');
            Route::get('verification/verify/{id}/{token}', 'verificationVerify')->name('verification.verify');
            Route::middleware('throttle:6,1')->group(function () {
                Route::post('/verification/send', 'verificationSend')->name('verification.send');
            });
        });

        Route::middleware('verified.penduduk')->group(function () {

            Route::get('/', HomeController::class)->name('home');

            Route::controller(SuratController::class)->prefix('surat')->name('surat.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/new', 'new')->name('new');
                Route::get('/create/{jenis_surat}', 'create')->name('create');
                Route::post('/store/{jenis_surat}', 'store')->name('store');
                Route::get('/edit/{jenis_surat}/{surat}', 'edit')->name('edit');
                Route::put('/update/{jenis_surat}/{surat}', 'update')->name('update');
                Route::get('/{surat}', 'show')->name('show');
                Route::delete('/destroy/{surat}', 'destroy')->name('destroy');
            });

            Route::controller(CetakController::class)->prefix('cetak')->name('cetak.')->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/print/{surat}', 'print')->name('print');
            });

            Route::controller(AccountController::class)->prefix('account')->name('account.')->group(function () {
                Route::get('/profile', 'profileEdit')->name('profile.edit');
                Route::post('/profile/update', 'profileUpdate')->name('profile.update');
                Route::get('/password', 'passwordEdit')->name('password.edit');
                Route::post('/password/update', 'passwordUpdate')->name('password.update');
            });
        });

        Route::post('logout', LogoutController::class)->name('logout');
    });
});
