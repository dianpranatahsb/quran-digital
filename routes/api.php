<?php

use App\Http\Controllers\QuranController;
use App\Http\Controllers\PrayerController;
use App\Http\Controllers\SearchController;

Route::get('/surahs', [QuranController::class, 'index']);
Route::get('/surahs/{id}', [QuranController::class, 'show']);
Route::get('/prayer-times', [PrayerController::class, 'index']);
Route::post('/search-history', [SearchController::class, 'store']);
Route::get('/search-history', [SearchController::class, 'index']);