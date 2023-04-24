<?php

use App\Http\Controllers\Api\V1\CartController;
use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\OrderController;
use App\Http\Controllers\Api\V1\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('product', [ProductController::class, 'index'])->name('api.products.index');
Route::get('product/{id}', [ProductController::class, 'show'])->name('api.products.show');
Route::post('product', [ProductController::class, 'store'])->name('api.products.store');
Route::put('product/{id}', [ProductController::class, 'update'])->name('api.products.update');
Route::delete('product/{id}', [ProductController::class, 'destroy'])->name('api.products.destroy');
Route::get('product/category/{name}', [ProductController::class, 'getProductsByCategory']);

Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::get('/{category}', [CategoryController::class, 'show']);
    Route::put('/{category}', [CategoryController::class, 'update']);
    Route::delete('/{category}', [CategoryController::class, 'destroy']);
    Route::get('/{id}/products', [CategoryController::class, 'getProductsByCategoryId']);
});

// API for cart
Route::get('/cart', [CartController::class, 'getCart']);
Route::post('/cart', [CartController::class, 'addProduct']);
Route::put('/cart/update/{id}', [CartController::class, 'updateCartQuantity']);
Route::delete('/cart/{productId}', [CartController::class, 'deleteProductFromCart']);

// API for order

Route::get('/order', [OrderController::class, 'index']);
Route::get('/orders/{id}', [OrderController::class, 'store']);