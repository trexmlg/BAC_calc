<?php

use App\Http\Controllers\BACCalculatorController;
use Illuminate\Support\Facades\Route;

Route ::get('/', [BACCalculatorController::class, 'index'])->name('bac.index');
Route ::post('/calculate', [BACCalculatorController::class, 'calculate'])->name('bac.calculate');
Route ::get('/history', [BACCalculatorController::class, 'history'])->name('bac.history');
Route ::delete('/calculation/{id}', [BACCalculatorController::class, 'delete'])->name('bac.delete');