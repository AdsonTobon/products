<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Routes sin controller
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']); // create
Route::post('/products', [ProductController::class, 'store']); // store
Route::get('/products/{product}', [ProductController::class, 'show']); // show
Route::get('/products/{product}/edit', [ProductController::class, 'edit']); // edit
Route::match(['put', 'patch'], '/products/{product}', [ProductController::class, 'update']); // update
Route::delete('/products/{product}', [ProductController::class, 'destroy']); // destroy
