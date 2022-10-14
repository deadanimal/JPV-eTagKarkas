<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RumahSembelihController;
use App\Http\Controllers\DagingController;
use App\Http\Controllers\TagController;


Route::middleware(['auth'])->group(function () {

    Route::get('', [UserController::class, 'home']);

    Route::get('rumah', [RumahSembelihController::class, 'senarai_rumah']);
    Route::post('rumah', [RumahSembelihController::class, 'cipta_rumah']);
    
    Route::get('daging', [DagingController::class, 'senarai_daging']);
    Route::get('daging/{id}', [DagingController::class, 'satu_daging']);
    Route::post('daging', [DagingController::class, 'cipta_daging']);
    Route::post('daging/{id}/sebelum-sembelih', [DagingController::class, 'cipta_sebelum_sembelih']);
    Route::post('daging/{id}/selepas-sembelih', [DagingController::class, 'cipta_selepas_sembelih']);
    Route::post('daging/{id}/laporan', [DagingController::class, 'cipta_laporan']);
    
    Route::get('tag', [TagController::class, 'senarai_tag']);
    Route::get('tag/{id}', [TagController::class, 'satu_tag']);
    Route::post('tag', [TagController::class, 'cipta_tag']);    

});

require __DIR__.'/auth.php';
