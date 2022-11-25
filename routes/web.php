<?php

use App\Http\Controllers\AnteMortemRuminanController;
use App\Http\Controllers\PemeriksaanController;
use App\Http\Controllers\PemeriksaanHarianController;
use App\Http\Controllers\PostMortemRuminanController;
use App\Models\PostMortemRuminan;
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
    
    Route::get('daging', [DagingController::class, 'senarai']);    
    Route::post('daging', [DagingController::class, 'daftar']);
    Route::post('daging/semak', [DagingController::class, 'semak']);
    Route::get('daging/{id}', [DagingController::class, 'satu']);
    Route::put('daging/{id}', [DagingController::class, 'kemaskini']);
    Route::post('daging/{id}/sebelum-sembelih', [DagingController::class, 'cipta_sebelum_sembelih']);
    Route::post('daging/{id}/selepas-sembelih', [DagingController::class, 'cipta_selepas_sembelih']);
    Route::post('daging/{id}/laporan', [DagingController::class, 'cipta_laporan']);

    //zach tambah
    Route::get('pemeriksaan', [PemeriksaanController::class, 'senarai']);
    Route::get('pemeriksaan/{id}', [PemeriksaanController::class, 'satu_pemeriksaan']);
    Route::post('pemeriksaan', [PemeriksaanController::class, 'cipta_pemeriksaan']);
    Route::put('pemeriksaan/{id}', [PemeriksaanController::class, 'kemaskini_pemeriksaan']);
    Route::get('tunjuk-harian/{id}', [PemeriksaanController::class, 'tunjuk_harian']);
    Route::get('jana-harian/{id}', [PemeriksaanController::class, 'jana_harian']);
    Route::get('pemeriksaan-unggas', [PemeriksaanController::class, 'senarai_unggas']);
    Route::post('pemeriksaan-unggas', [PemeriksaanController::class, 'cipta_unggas']);
    Route::get('pemeriksaan-unggas/{id}', [PemeriksaanController::class, 'satu_pemeriksaan_unggas']);
    Route::post('periksa-unggas', [PemeriksaanController::class, 'cipta_pemeriksaan_unggas']);




    Route::get('harian', [PemeriksaanHarianController::class, 'satu_harian']);
    Route::post('harian', [PemeriksaanHarianController::class, 'cipta_harian']);
    Route::get('periksa-rapi/{id}', [PemeriksaanHarianController::class, 'periksa_rapi']);
    Route::get('jana-rapi/{id}', [PemeriksaanHarianController::class, 'jana_rapi']);
    Route::post('harian/{id}', [PemeriksaanHarianController::class, 'kemaskini_harian']);

    Route::get('ante-mortem', [AnteMortemRuminanController::class, 'satu_ante_mortem']);
    Route::post('ante-mortem', [AnteMortemRuminanController::class, 'cipta_anteMortem']);
    Route::put('ante-mortem/{id}', [AnteMortemRuminanController::class, 'kemaskini_am']);

    Route::get('post-mortem', [PostMortemRuminanController::class, 'satu_post_mortem']);
    Route::post('post-mortem', [PostMortemRuminanController::class, 'cipta_postMortem']);
    Route::put('post-mortem/{id}', [PostMortemRuminanController::class, 'kemaskini_pm']);
    Route::get('tunjuk-pm/{id}', [PostMortemRuminanController::class, 'tunjuk_pm']);
    Route::get('jana-pm/{id}', [PostMortemRuminanController::class, 'jana_pm']);



    

    
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
    
    Route::get('profil', [UserController::class, 'profil']);
    Route::put('profil_katalaluan', [UserController::class, 'profil_katalaluan']);

  

});

Route::get('lupa', [UserController::class, 'tunjuk_lupa']);
Route::post('lupa', [UserController::class, 'cipta_lupa']);



Route::middleware(['role:pentadbir'])->group(function () {

    Route::get('pengguna', [UserController::class, 'senarai']);
    Route::get('pengguna/borang', [UserController::class, 'borang']);
    Route::get('pengguna/{id}', [UserController::class, 'satu']);
    Route::put('pengguna/{id}', [UserController::class, 'kemaskini']);
    Route::post('pengguna', [UserController::class, 'cipta']); 
    Route::get('pengguna/{id}/aktif', [UserController::class, 'aktif_pengguna']);
   

});

require __DIR__.'/auth.php';
