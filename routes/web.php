<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerformanceController;



Route::get('/', [PerformanceController::class, 'index'])->name('performance.index');
Route::post('/performance', [PerformanceController::class, 'store'])->name('performance.store');
Route::get('/performance/search', [PerformanceController::class, 'search'])->name('performance.search');
Route::get('/performance/{id}/edit', [PerformanceController::class, 'edit'])->name('performance.edit');
Route::put('/performance/{id}', [PerformanceController::class, 'update'])->name('performance.update');
Route::delete('/performance/{id}', [PerformanceController::class, 'destroy'])->name('performance.destroy');
