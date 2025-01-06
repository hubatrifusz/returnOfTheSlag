<?php

use App\Http\Controllers\SlagController;

Route::get('/', [SlagController::class, 'index'])->name('index');
Route::resource('slag', SlagController::class);

