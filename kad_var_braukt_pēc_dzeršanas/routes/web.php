<?php

use App\Http\Controllers\BACCalculatorController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BACCalculatorController::class, 'index'])->name('bac.index');
Route::match(['get', 'post'], '/calculate', [BACCalculatorController::class, 'calculate'])->name('bac.calculate');
Route::get('/history', [BACCalculatorController::class, 'history'])->name('bac.history');

Route::get('/timer', [BACCalculatorController::class, 'timer'])->name('bac.timer');



Route::delete('/calculation/{id}', [BACCalculatorController::class, 'delete'])
    ->where('id', '[0-9]+')
    ->name('bac.delete');