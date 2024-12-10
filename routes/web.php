<?php

use App\Http\Controllers\ItemController;

Route::get('/', [ItemController::class, 'index'])->name('index');
Route::resource('items', ItemController::class);





