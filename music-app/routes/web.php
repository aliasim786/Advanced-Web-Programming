<?php

use App\Http\Controllers\musicController;
use Illuminate\Support\Facades\Route;

Route::get('/music', [musicController::class, 'index']);
Route::get('/music/create', [musicController::class, 'create']);
Route::get('/music/about', [musicController::class, 'about']);
