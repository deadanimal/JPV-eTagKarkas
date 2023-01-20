<?php

use App\Http\Controllers\AnteMortemRuminanController;
use App\Http\Controllers\PemeriksaanController;
use App\Http\Controllers\PemeriksaanDalamNegaraController;
use App\Http\Controllers\PemeriksaanHarianController;
use App\Http\Controllers\PostMortemRuminanController;
use App\Models\PemeriksaanDalamNegara;
use App\Models\PostMortemRuminan;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RumahSembelihController;
use App\Http\Controllers\DagingController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\StokTagController;
use App\Http\Controllers\SampelController;


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
    Route::get('catatan/{id}', [PemeriksaanController::class, 'catatan']);
    Route::post('catatan', [PemeriksaanController::class, 'cipta_catatan']);
    Route::put('catatan/{id}', [PemeriksaanController::class, 'kemaskini_catatan']);
    Route::post('pemeriksaan', [PemeriksaanController::class, 'cipta_pemeriksaan']);
    Route::put('pemeriksaan/{id}', [PemeriksaanController::class, 'kemaskini_pemeriksaan']);
    Route::get('tunjuk-harian/{id}', [PemeriksaanController::class, 'tunjuk_harian']);
    Route::get('jana-harian/{id}', [PemeriksaanController::class, 'jana_harian']);
    Route::get('pemeriksaan-unggas', [PemeriksaanController::class, 'senarai_unggas']);
    Route::post('pemeriksaan-unggas', [PemeriksaanController::class, 'cipta_unggas']);
    Route::get('pemeriksaan-unggas/{id}', [PemeriksaanController::class, 'satu_pemeriksaan_unggas']);
    Route::post('periksa-unggas', [PemeriksaanController::class, 'cipta_pemeriksaan_unggas']);
    Route::get('pemeriksaan-babi', [PemeriksaanController::class, 'senarai_babi']);
    Route::post('pemeriksaan-babi', [PemeriksaanController::class, 'cipta_babi']);
    Route::get('pemeriksaan-babi/{id}', [PemeriksaanController::class, 'satu_pemeriksaan_babi']);
    Route::get('catatan-babi/{id}', [PemeriksaanController::class, 'catatan_babi']);
    Route::post('catatan-babi', [PemeriksaanController::class, 'cipta_catatan_babi']);
    Route::put('catatan-babi/{id}', [PemeriksaanController::class, 'kemaskini_catatan_babi']);


    
    Route::get('harian', [PemeriksaanHarianController::class, 'satu_harian']);
    Route::post('harian', [PemeriksaanHarianController::class, 'cipta_harian']);
    Route::get('periksa-rapi/{id}', [PemeriksaanHarianController::class, 'periksa_rapi']);
    Route::post('periksa-rapi/{id}', [PemeriksaanHarianController::class, 'simpan_periksa_rapi']);
    Route::get('jana-rapi/{id}', [PemeriksaanHarianController::class, 'jana_rapi']);
    Route::post('harian/{id}', [PemeriksaanHarianController::class, 'kemaskini_harian']);
    Route::get('harian', [PemeriksaanHarianController::class, 'satu_harian_babi']);
    Route::post('periksa-babi', [PemeriksaanHarianController::class, 'cipta_pemeriksaan_babi']);
    Route::get('periksa-rapi-babi/{id}', [PemeriksaanHarianController::class, 'periksa_rapi_babi']);
    Route::post('periksa-rapi-babi/{id}', [PemeriksaanHarianController::class, 'simpan_periksa_rapi_babi']);
    Route::get('jana-rapi-babi/{id}', [PemeriksaanHarianController::class, 'jana_rapi_babi']);


    Route::get('ante-mortem', [AnteMortemRuminanController::class, 'satu_ante_mortem']);
    Route::post('ante-mortem', [AnteMortemRuminanController::class, 'cipta_anteMortem']);
    Route::put('ante-mortem/{id}', [AnteMortemRuminanController::class, 'kemaskini_am']);
    Route::get('ante-mortem-unggas', [AnteMortemRuminanController::class, 'satu_am_unggas']);
    Route::post('ante-mortem-unggas', [AnteMortemRuminanController::class, 'cipta_anteMortemUnggas']);
    Route::put('ante-mortem-unggas/{id}', [AnteMortemRuminanController::class, 'kemaskini_am_unggas']);
    Route::get('ante-mortem-babi', [AnteMortemRuminanController::class, 'satu_ante_mortem_babi']);
    Route::post('ante-mortem-babi', [AnteMortemRuminanController::class, 'cipta_anteMortem_babi']);
    Route::put('ante-mortem-babi/{id}', [AnteMortemRuminanController::class, 'kemaskini_am_babi']);



    Route::get('post-mortem', [PostMortemRuminanController::class, 'satu_post_mortem']);
    Route::post('post-mortem', [PostMortemRuminanController::class, 'cipta_postMortem']);
    Route::put('post-mortem/{id}', [PostMortemRuminanController::class, 'kemaskini_pm']);
    Route::get('tunjuk-pm/{id}', [PostMortemRuminanController::class, 'tunjuk_pm']);
    Route::get('jana-pm/{id}', [PostMortemRuminanController::class, 'jana_pm']);
    Route::get('post-mortem-unggas', [PostMortemRuminanController::class, 'satu_pm_unggas']);
    Route::post('post-mortem-unggas', [PostMortemRuminanController::class, 'cipta_postMortemUnggas']);
    Route::put('post-mortem-unggas/{id}', [PostMortemRuminanController::class, 'kemaskini_pm_unggas']);
    Route::get('/testjap', [PostMortemRuminanController::class, 'testjap']);
    Route::get('post-mortem-babi', [PostMortemRuminanController::class, 'satu_post_mortem_babi']);
    Route::post('post-mortem-babi', [PostMortemRuminanController::class, 'cipta_postMortem_babi']);
    Route::put('post-mortem-babi/{id}', [PostMortemRuminanController::class, 'kemaskini_pm_babi']);
    Route::get('tunjuk-pm-babi/{id}', [PostMortemRuminanController::class, 'tunjuk_pm_babi']);
    Route::get('jana-pm-babi/{id}', [PostMortemRuminanController::class, 'jana_pm_babi']);

    Route::get('tag', [TagController::class, 'senarai']);
    Route::get('tag/borang', [TagController::class, 'borang']);
    Route::get('tag/{id}', [TagController::class, 'satu']);
    Route::post('tag', [TagController::class, 'cipta']);   
    Route::put('tag/{id}', [TagController::class, 'kemaskini']);
    Route::get('tag/{id}/jana', [TagController::class, 'jana']);
    Route::get('tag/{id}/delete', [TagController::class, 'padam']);
    Route::get('jana/{id}', [TagController::class, 'jana']);
    // Route::get('jana-tag/{id}', [TagController::class, 'jana_tag']);


    // Pendaftaran stok tag - zach tambah
    Route::get('stok-tag', [StokTagController::class, 'senarai']);
    Route::get('stok-tag/borang', [StokTagController::class, 'borang']);
    Route::post('stok-tag', [StokTagController::class, 'cipta']);
    Route::get('stok-tag/{id}', [StokTagController::class, 'satu']);
    Route::put('stok-tag/{id}', [StokTagController::class, 'kemaskini']);
    
    Route::get('profil', [UserController::class, 'profil']);
    Route::put('profil_katalaluan', [UserController::class, 'profil_katalaluan']);


// Modul Pensampelan
    Route::get('/pensampelan', [SampelController::class, 'senarai']);
    Route::get('/pensampelan-pilihan', [SampelController::class, 'pilihan']);
    Route::get('/pensampelan-pilihan/{id}', [SampelController::class, 'satu_pilihan']);
    // Route::get('/pensampelan/borang-sampel', [SampelController::class, 'borang_sampel']);
    Route::get('/pensampelan/pilihan/{pilihan}', [SampelController::class, 'borang_sampel']);
    Route::post('/pensampelan/borang-sampel/{id}', [SampelController::class, 'cipta_sampel']);
    Route::post('/jadual/{id}', [SampelController::class, 'cipta_jadual']);

// Modul PDN
    Route::get('pdn', [PemeriksaanDalamNegaraController::class, 'senarai']);
    Route::get('borang-survelan', [PemeriksaanDalamNegaraController::class, 'borang_survelan']);
    Route::post('borang-survelan', [PemeriksaanDalamNegaraController::class, 'cipta_survelan']);
    Route::get('satu_pdn/{id}', [PemeriksaanDalamNegaraController::class, 'kemaskini_pdn']);
    Route::put('simpan_kemaskini_pdn/{id}', [PemeriksaanDalamNegaraController::class, 'simpan_kemaskini_pdn']);
    Route::delete('padam_pdn/{id}', [PemeriksaanDalamNegaraController::class, 'padam_pdn']);
    Route::get('jana-survelan/{id}', [PemeriksaanDalamNegaraController::class, 'jana_jadual_survelan']);



    Route::get('jadual_survelan/{id}', [PemeriksaanDalamNegaraController::class, 'jadual']);
    Route::post('cipta_survelan_audit', [PemeriksaanDalamNegaraController::class, 'cipta_survelan_audit']);
    Route::get('kemaskini_jadual_survelan/{id}', [PemeriksaanDalamNegaraController::class, 'kemaskini_jadual_survelan']);
    Route::put('simpan_kemaskini_jadual_survelan/{id}', [PemeriksaanDalamNegaraController::class, 'simpan_kemaskini_jadual_survelan']);
    Route::delete('padam_survelan/{id}', [PemeriksaanDalamNegaraController::class, 'padam_survelan']);
    Route::get('borang-log/{id}', [PemeriksaanDalamNegaraController::class, 'borang_log']);
//nbrobr
    Route::get('borang_ncsobr', [PemeriksaanDalamNegaraController::class, 'borang_ncsobr']);
    Route::post('simpan_borang_ncsobr', [PemeriksaanDalamNegaraController::class, 'cipta_ncsobr']);
    Route::get('borang-pemeriksa/{id}', [PemeriksaanDalamNegaraController::class, 'borang_pemeriksa']);
    Route::post('cipta_jadual_ncr', [PemeriksaanDalamNegaraController::class, 'cipta_jadual_ncr']);
//ncr
    Route::get('borang_pemeriksa', [PemeriksaanDalamNegaraController::class, 'borang_pemeriksa']);
    Route::post('cipta_borang_ncr', [PemeriksaanDalamNegaraController::class, 'cipta_jadual_ncr']);
    Route::get('kemaskini_jadual_ncr/{id}', [PemeriksaanDalamNegaraController::class, 'kemaskini_jadual_ncr']);
    Route::put('simpan_kemaskini_jadual_ncr/{id}', [PemeriksaanDalamNegaraController::class, 'simpan_kemaskini_jadual_ncr']);
    Route::delete('padam_ncr/{id}', [PemeriksaanDalamNegaraController::class, 'padam_ncr']);
    Route::get('jana-ncr/{id}', [PemeriksaanDalamNegaraController::class, 'jana_ncr']);

//obr - correction obs
    Route::get('borang_obr', [PemeriksaanDalamNegaraController::class, 'borang_obr']);
    Route::post('cipta_borang_obr', [PemeriksaanDalamNegaraController::class, 'cipta_jadual_obr']);
    Route::get('kemaskini_jadual_obr/{id}', [PemeriksaanDalamNegaraController::class, 'kemaskini_jadual_obr']);
    Route::put('simpan_kemaskini_jadual_obr/{id}', [PemeriksaanDalamNegaraController::class, 'simpan_kemaskini_jadual_obr']);
    Route::delete('padam_obr/{id}', [PemeriksaanDalamNegaraController::class, 'padam_obr']);
    Route::get('jana-obs/{id}', [PemeriksaanDalamNegaraController::class, 'jana_obs']);


//log
    Route::get('borang_log', [PemeriksaanDalamNegaraController::class, 'borang_log']);
    Route::post('cipta_borang_log', [PemeriksaanDalamNegaraController::class, 'cipta_log']);
    Route::get('kemaskini_jadual_log/{id}', [PemeriksaanDalamNegaraController::class, 'kemaskini_jadual_log']);
    Route::put('simpan_kemaskini_jadual_log/{id}', [PemeriksaanDalamNegaraController::class, 'simpan_kemaskini_jadual_log']);
    Route::delete('padam_log/{id}', [PemeriksaanDalamNegaraController::class, 'padam_log']);
    Route::get('jana-log/{id}', [PemeriksaanDalamNegaraController::class, 'jana_log']);


    //exsport singapura
    Route::get('eksport-luar', [PemeriksaanDalamNegaraController::class, 'senarai_eksport_luar']);
    Route::get('borang-adequacy', [PemeriksaanDalamNegaraController::class, 'borang_adequacy']);
    Route::post('cipta_exsport', [PemeriksaanDalamNegaraController::class, 'cipta_exsport']);
    Route::get('kemaskini_exsport/{id}', [PemeriksaanDalamNegaraController::class, 'kemaskini_exsport']);
    Route::put('simpan_kemaskini_exsport/{id}', [PemeriksaanDalamNegaraController::class, 'simpan_kemaskini_exsport']);
    Route::delete('padam_exsport/{id}', [PemeriksaanDalamNegaraController::class, 'padam_exsport']);

    //exsport selain singapura
    Route::get('borang-adequacy1', [PemeriksaanDalamNegaraController::class, 'borang_adequacy1']);
    Route::post('cipta_exsport1', [PemeriksaanDalamNegaraController::class, 'cipta_exsport1']);
    Route::get('kemaskini_exsport1/{id}', [PemeriksaanDalamNegaraController::class, 'kemaskini_exsport1']);
    Route::put('simpan_kemaskini_exsport1/{id}', [PemeriksaanDalamNegaraController::class, 'simpan_kemaskini_exsport1']);
    Route::get('jana-eksport/{id}', [PemeriksaanDalamNegaraController::class, 'jana_eksport']);




    Route::get('sijil-veterinar', [PemeriksaanDalamNegaraController::class, 'senarai_veterinar']);
    Route::get('borang-sijil', [PemeriksaanDalamNegaraController::class, 'borang_sijil']);
    Route::post('sijil', [PemeriksaanDalamNegaraController::class, 'cipta_sijil']);
    Route::delete('sijil/{id}', [PemeriksaanDalamNegaraController::class, 'padam_sijil']);
    Route::get('satu-sijil/{id}', [PemeriksaanDalamNegaraController::class, 'satu_sijil']);
    Route::put('kemaskini-sijil/{id}', [PemeriksaanDalamNegaraController::class, 'kemaskini_sijil']);




    Route::get('borang-semak', [PemeriksaanDalamNegaraController::class, 'borang_semak']);
    Route::post('borang-semak', [PemeriksaanDalamNegaraController::class, 'cipta_borang_semak_A']);
    Route::get('satu-semak/{id}', [PemeriksaanDalamNegaraController::class, 'satu_borang_semak']);
    Route::post('borang-semakB', [PemeriksaanDalamNegaraController::class, 'cipta_borang_semak_B']);
    Route::post('borang-semakC', [PemeriksaanDalamNegaraController::class, 'cipta_borang_semak_C']);
    Route::post('borang-semakD', [PemeriksaanDalamNegaraController::class, 'cipta_borang_semak_D']);
    Route::get('jana-semak/{id}', [PemeriksaanDalamNegaraController::class, 'jana_semak']);

    Route::get('keratan', [PemeriksaanDalamNegaraController::class, 'senarai_keratan']);
    Route::get('borang-keratan', [PemeriksaanDalamNegaraController::class, 'borang_keratan']);
    Route::post('keratan', [PemeriksaanDalamNegaraController::class, 'cipta_keratan']);
    Route::delete('keratan/{id}', [PemeriksaanDalamNegaraController::class, 'padam_keratan']);
    Route::get('satu-keratan/{id}', [PemeriksaanDalamNegaraController::class, 'satu_keratan']);
    Route::get('lihat-keratan/{id}', [PemeriksaanDalamNegaraController::class, 'lihat_keratan']);
    Route::put('kemaskini-keratan/{id}', [PemeriksaanDalamNegaraController::class, 'kemaskini_keratan']);
    Route::get('jana-keratan/{id}', [PemeriksaanDalamNegaraController::class, 'jana_keratan']);


    Route::get('borang-verifikasi', [PemeriksaanDalamNegaraController::class, 'borang_verifikasi']);
    Route::post('borang-verifikasi', [PemeriksaanDalamNegaraController::class, 'cipta_borang_verifikasi']);
    Route::get('borang-verifikasi2', [PemeriksaanDalamNegaraController::class, 'borang_verifikasi2']);
    Route::post('borang-verifikasi2', [PemeriksaanDalamNegaraController::class, 'cipta_borang_verifikasi2']);
    Route::get('borang-verifikasi3', [PemeriksaanDalamNegaraController::class, 'borang_verifikasi3']);
    Route::post('borang-verifikasi3', [PemeriksaanDalamNegaraController::class, 'cipta_borang_verifikasi3']);


    Route::get('susu-tepung', [PemeriksaanDalamNegaraController::class, 'senarai_susu']);
    Route::get('borang-susu', [PemeriksaanDalamNegaraController::class, 'borang_susu']);
    Route::post('susu', [PemeriksaanDalamNegaraController::class, 'cipta_susu']);
    Route::delete('susu/{id}', [PemeriksaanDalamNegaraController::class, 'padam_susu']);
    Route::get('satu-susu/{id}', [PemeriksaanDalamNegaraController::class, 'satu_susu']);
    Route::put('kemaskini-susu/{id}', [PemeriksaanDalamNegaraController::class, 'kemaskini_susu']);

    Route::get('borang-perakuan', [PemeriksaanDalamNegaraController::class, 'borang_perakuan']);
    Route::post('borang-perakuan', [PemeriksaanDalamNegaraController::class, 'cipta_perakuan']);
    Route::get('borang-perakuan/{id}', [PemeriksaanDalamNegaraController::class, 'satu_perakuan']);
    Route::delete('perakuan/{id}', [PemeriksaanDalamNegaraController::class, 'padam_perakuan']);
    Route::get('lihat-borang-perakuan/{id}', [PemeriksaanDalamNegaraController::class, 'lihat_perakuan']);
    Route::put('kemaskini-perakuan/{id}', [PemeriksaanDalamNegaraController::class, 'kemaskini_perakuan']);


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
