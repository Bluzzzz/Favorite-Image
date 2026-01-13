<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FavoriteImageController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/favorite-images', [FavoriteImageController::class, 'index']);
Route::post('/favorite-images', [FavoriteImageController::class, 'store']);
Route::delete('/favorite-images/{id}', [FavoriteImageController::class, 'destroy']);