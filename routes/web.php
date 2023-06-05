<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::prefix('product')->group(function () {

    Route::get('/create', [ProductController::class, 'create'])->name('product/create');

    Route::get('/', [ProductController::class, 'list']);
});
