<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RumahSembelihController;
use App\Http\Controllers\DagingController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\StokTagController;


Route::middleware(['auth'])->group(function () {

    Route::get('', [UserController::class, 'home']);

    Route::get('rumah', [RumahSembelihController::class, 'senarai_rumah']);
    Route::get('rumah-borang', [RumahSembelihController::class, 'borang_rumah']);
    Route::post('rumah', [RumahSembelihController::class, 'cipta_rumah']);
    Route::get('rumah/{id}', [RumahSembelihController::class, 'satu_rumah']);
    Route::get('rumah/{id}/aktif', [RumahSembelihController::class, 'aktif_rumah']);
    Route::put('rumah/{id}', [RumahSembelihController::class, 'kemaskini_rumah']);
    Route::post('rumah/{id}/tambah', [RumahSembelihController::class, 'tambah_pengguna']);
    Route::get('rumah/{id}/gugur/{pengguna_id}', [RumahSembelihController::class, 'gugur_pengguna']);
    
    Route::get('daging', [DagingController::class, 'senarai_daging']);    
    Route::post('daging', [DagingController::class, 'daftar']);
    Route::post('daging/semak', [DagingController::class, 'semak']);
    Route::get('daging/{id}', [DagingController::class, 'satu']);
    Route::put('daging/{id}', [DagingController::class, 'kemaskini_daging']);
    Route::post('daging/{id}/sebelum-sembelih', [DagingController::class, 'cipta_sebelum_sembelih']);
    Route::post('daging/{id}/selepas-sembelih', [DagingController::class, 'cipta_selepas_sembelih']);
    Route::post('daging/{id}/laporan', [DagingController::class, 'cipta_laporan']);
    
    Route::get('tag', [TagController::class, 'senarai']);
    Route::get('tag/borang', [TagController::class, 'borang']);
    Route::get('tag/{id}', [TagController::class, 'satu']);
    Route::post('tag', [TagController::class, 'cipta']);   
    Route::put('tag/{id}', [TagController::class, 'kemaskini']);
    Route::get('tag/{id}/jana', [TagController::class, 'jana']);
    Route::get('tag/{id}/delete', [TagController::class, 'padam']);

    // pendaftaran stok tag - zach tambah
    Route::get('stok-tag', [StokTagController::class, 'senarai']);
    Route::get('stok-tag/borang', [StokTagController::class, 'borang']);
    Route::post('stok-tag', [StokTagController::class, 'cipta']);
    Route::get('stok-tag/{id}', [StokTagController::class, 'satu']);
    Route::put('stok-tag/{id}', [StokTagController::class, 'kemaskini']);
    
    Route::get('profil', [UserController::class, 'senarai_profil']);
    Route::put('profil', [UserController::class, 'kemaskini_profil']);

  

});

Route::middleware(['role:pentadbir'])->group(function () {

    Route::get('pengguna', [UserController::class, 'senarai']);
    Route::get('pengguna/borang', [UserController::class, 'borang']);
    Route::get('pengguna/{id}', [UserController::class, 'satu']);
    Route::put('pengguna/{id}', [UserController::class, 'kemaskini']);
    Route::post('pengguna', [UserController::class, 'cipta']);    

});

require __DIR__.'/auth.php';
