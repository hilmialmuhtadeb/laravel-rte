<?php

use App\Http\Controllers\ArchiveController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/archives', [ArchiveController::class, 'index'])->name('archive.index');
Route::get('/archives/{archive}', [ArchiveController::class, 'show'])->name('archive.show');
Route::post('/archives', [ArchiveController::class, 'store'])->name('archive.store');