<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;

// Authentication Routes
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);

// Product Routes
Route::get('/products', [ProductController::class, 'get_products']);
Route::post('/products', [ProductController::class, 'add_product']);
Route::post('/products/update/{id}', [ProductController::class, 'update_product']);
Route::delete('/products/{id}', [ProductController::class, 'delete_product']);

// Shopping Cart Routes
Route::get('/cart', [ShoppingCartController::class, 'get_shopping_cart']);
Route::post('/cart', [ShoppingCartController::class, 'add_shopping_cart']);
Route::delete('/cart', [ShoppingCartController::class, 'delete_shopping_cart']);

Route::get('login', function () {
    abort(401, 'Unauthenticated');
});
