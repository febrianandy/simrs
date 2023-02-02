<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;

// Route Page
Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'dashboard');
    Route::get('/data-pasien', 'DataPasien');
    Route::get('/dokter', 'dokter');
    Route::get('/data-rekam-medis', 'DataRekamMedis');
    Route::get('/tambah-rekam-medis', 'rekam_medis')->name('tambah-pasien');
    Route::get('/data-poli-klinik', 'data_poli');
});

Route::controller(PasienController::class)->group(function () {
    Route::get('/tambah-pasien', 'index')->name('tambah-pasien');
    Route::post('/tambah-pasien', 'tambah_pasien');
});

Route::controller(DokterController::class)->group(function () {
    Route::get('/tambah-dokter', 'index')->name('tambah-dokter');
    Route::post('/tambah-dokter', 'store');
});


Route::controller(ObatController::class)->group(function () {
    Route::get('/data-obats', 'index');
    Route::get('/tambah-data-obats', 'tambah_data_obat');
    Route::post('/tambah-obat', 'store');
});
