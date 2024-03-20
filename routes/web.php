<?php

use App\Http\Controllers\ListProductController;
use Illuminate\Support\Facades\Route;

Route::get('/list_product', function () {
    return view('list_product');
});
Route::get('/list_product', [ListProductController::class, 'tampilkan']);