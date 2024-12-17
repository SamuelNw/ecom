<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/search', [ProductController::class, 'search']);

Route::get('/', function () {
    return view('welcome');
});
