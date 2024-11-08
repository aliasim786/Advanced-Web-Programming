<?php

use App\Http\Controllers\musicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});
Route::get('/music', [musicController::class, 'index']);
Route::get('/music/add', [musicController::class, 'create']);
Route::get('/music/about', [musicController::class, 'about']);
Route::post('/music', [musicController::class, 'store']);
Route::get('/music/{id}', [musicController::class, 'show']);
Route::get('/music/{id}/edit', [musicController::class, 'edit']);
Route::patch('/music',[musicController::class, 'update']);
Route::delete('music',[musicController::class,'destroy']);
Route::get('/music/search', [MusicController::class, 'search']);
