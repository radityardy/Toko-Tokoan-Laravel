<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TokoController;

Route::get('/', [TokoController::class, 'index'])->name('home');

Route::resource('tokos', TokoController::class)->middleware('auth');

Auth::routes();
