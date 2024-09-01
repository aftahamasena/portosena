<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::prefix('work')->group(function () {
    Route::get('/', [PageController::class, 'workIndex'])->name('work.index');
    Route::get('/1', [PageController::class, 'work1'])->name('work.1');
    Route::get('/2', [PageController::class, 'work2'])->name('work.2');
    Route::get('/3', [PageController::class, 'work3'])->name('work.3');
});

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/certificate', [PageController::class, 'certificate'])->name('certificate');


