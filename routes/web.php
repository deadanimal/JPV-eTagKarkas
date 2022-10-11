<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DagingController;
use App\Http\Controllers\TagController;

Route::get('/tag', [TagController::class, 'senarai_tag']);
Route::get('/tag/{id}', [TagController::class, 'satu_tag']);
Route::get('/tag/borang', [TagController::class, 'borang_tag']);
Route::post('/tag', [TagController::class, 'cipta_tag']);

Route::get('/daging', [DagingController::class, 'senarai_daging']);
Route::get('/daging/{id}', [DagingController::class, 'satu_daging']);
Route::get('/daging/borang', [DagingController::class, 'borang_daging']);
Route::post('/daging', [DagingController::class, 'cipta_daging']);