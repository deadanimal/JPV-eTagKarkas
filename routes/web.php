<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RumahSembelihController;
use App\Http\Controllers\DagingController;
use App\Http\Controllers\TagController;


Route::middleware(['auth'])->group(function () {

    Route::get('', [UserController::class, 'home']);

    Route::get('rumah', [RumahSembelihController::class, 'senarai_rumah']);
    Route::get('rumah-borang', [RumahSembelihController::class, 'borang_rumah']);
    Route::post('rumah', [RumahSembelihController::class, 'cipta_rumah']);
    Route::get('rumah/{id}', [RumahSembelihController::class, 'satu_rumah']);
    Route::get('rumah/{id}/aktif', [RumahSembelihController::class, 'aktif_rumah']);
    Route::put('rumah/{id}', [RumahSembelihController::class, 'kemaskini_rumah']);
    
    Route::get('daging', [DagingController::class, 'senarai_daging']);    
    Route::post('daging', [DagingController::class, 'cipta_daging']);
    Route::get('daging/satu_ruminan', [DagingController::class, 'satu_daging']);
    Route::put('daging/{id}', [DagingController::class, 'kemaskini_daging']);
    Route::post('daging/{id}/sebelum-sembelih', [DagingController::class, 'cipta_sebelum_sembelih']);
    Route::post('daging/{id}/selepas-sembelih', [DagingController::class, 'cipta_selepas_sembelih']);
    Route::post('daging/{id}/laporan', [DagingController::class, 'cipta_laporan']);
    
    Route::get('tag', [TagController::class, 'senarai_tag']);
    Route::get('tag/{id}', [TagController::class, 'satu_tag']);
    Route::post('tag', [TagController::class, 'cipta_tag']);   
    Route::put('tag/{id}', [TagController::class, 'kemaskini_tag']);
    Route::delete('tag/{id}', [TagController::class, 'padam_tag']);

    // pendaftaran stok tag - zach tambah
    Route::get('tag/senarai_tag/stok', [TagController::class, 'senarai_stok_tag']);
    Route::post('tag/senarai_tag/stok', [TagController::class, 'cipta_stok_tag']);
    Route::get('tag/senarai_tag/stok/{id}', [TagController::class, 'satu_stok_tag']);
    Route::put('tag/senarai_tag/stok/{id}', [TagController::class, 'kemaskini_stok_tag']);

    

    
    Route::get('profil', [UserController::class, 'senarai_profil']);
    Route::put('profil', [UserController::class, 'kemaskini_profil']);

  

});

Route::middleware(['role:pentadbir'])->group(function () {

    Route::get('pengguna', [UserController::class, 'senarai_pengguna']);
    Route::get('pengguna/{id}', [UserController::class, 'satu_pengguna']);
    Route::post('pengguna', [UserController::class, 'cipta_pengguna']);    

});

require __DIR__.'/auth.php';
