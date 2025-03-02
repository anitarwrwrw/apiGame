<?php

use App\Http\Controllers\SyncController;
use App\Http\Controllers\TebakAngkaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/tebak/store', [TebakAngkaController::class, "store"]);
Route::get('/riwayat', [TebakAngkaController::class, "index"]);
Route::delete('/hapus/{id}', [TebakAngkaController::class, "delete"]);
Route::get('/tebak/sync', [SyncController::class, "syncFromServer"]);
