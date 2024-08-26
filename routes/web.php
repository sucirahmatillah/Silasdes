<?php

use App\Http\Controllers\ReferensiController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::controller(ReferensiController::class)->group(function () {
    Route::get('wilayah', 'wilayah')->name('wilayah');
});

require __DIR__ . '/user.php';
require __DIR__ . '/penduduk.php';
