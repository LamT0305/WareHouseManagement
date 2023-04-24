<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('product.index');
});
Route::get('product/view-data', [ProductController::class, 'viewData']);
Route::get('/product/create', [ProductController::class, 'create']);
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/create', [ProductController::class, 'store']);
Route::put('/product/update/{id}', [ProductController::class, 'update']);
Route::resource('/product', ProductController::class);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class, 'create']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);

Route::get('/cart', function () {
    return view('user.cart');
});



Route::resource('/cart', CartController::class);


