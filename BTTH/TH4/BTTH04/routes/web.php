<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\IssueController;

Route::get('/', [ComputerController::class, 'index'])->name('tabs');
Route::get('/issues', [IssueController::class, 'index'])->name('issues');
Route::get('/computers', [ComputerController::class, 'index'])->name('computers');

// Computer routes
Route::resource('computers', ComputerController::class);
Route::resource('issues', IssueController::class);
