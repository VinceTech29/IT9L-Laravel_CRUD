<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/music', [App\Http\Controllers\MusicController::class, 'index'])->name('music-gallery');
Route::get('/music/create', [App\Http\Controllers\CreateController::class, 'index'])->name('create-music');
Route::post('/music', [App\Http\Controllers\MusicController::class, 'store'])->name('music.store');
use App\Http\Controllers\MusicController;

Route::get('/music/{id}/edit', [MusicController::class, 'edit'])->name('edit-music');
Route::put('/music/{id}', [MusicController::class, 'update'])->name('update-music');
Route::delete('/music/{id}', [MusicController::class, 'destroy'])->name('delete-music');