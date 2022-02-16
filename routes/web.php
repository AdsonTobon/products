<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Routes sin controller
Route::get('/products', function () {
    return 'This is the list products';
});

Route::get('/products/create', function () {
    return 'This is the form to create a products';
});

Route::post('/products/create', function () {
    // return 'This is the form to create a products';
});

Route::get('/products/{product}', function ($product) {
    return "Showing product with id {$product}";
});

Route::get('/products/{product}/edit', function ($product) {
    return "Showing the form to edit the product with id {$product}";
});

Route::match(['put', 'patch'],'/products/{product}', function ($product) {
    //
});

Route::delete('/products/{product}', function ($product) {
   //
});
