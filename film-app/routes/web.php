<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/films', function () {
    return "Display all the films.";
});


Route::get('/films/create', function () {
    return "Add a new film";
});

Route::get('/films/about', function () {
    return "About the app";
});

use App\Http\Controllers\FilmController;

Route::get('/films', [FilmController::class, 'index']);
Route::get('/films/create', [FilmController::class, 'create']);
Route::get('/films/about', [FilmController::class, 'about']);
