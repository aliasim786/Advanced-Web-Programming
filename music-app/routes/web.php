<?php

use App\Http\Controllers\musicController;
use Illuminate\Support\Facades\Route;

Route::get('/music', [musicController::class, 'index']);
Route::get('/music/add', [musicController::class, 'create']);
Route::get('/music/about', [musicController::class, 'about']);
Route::post('/music', [musicController::class, 'store']);
Route::get('/music/{id}', [musicController::class, 'show']);