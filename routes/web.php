<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UrlYoutubeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class, '__invoke');

Route::prefix('url_youtube')->group(function () {
    Route::get('/table', [UrlYoutubeController::class, 'index'])->name('youtube.table');
    Route::get('/create', [UrlYoutubeController::class, 'create'])->name('youtube.create');
    Route::put('/create', [UrlYoutubeController::class, 'store'])->name('youtube.store');
});