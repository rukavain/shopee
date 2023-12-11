<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReviewsController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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


// Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get('/productslist', [ProductController::class, 'gotoprodlist'])->name('products.list');

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

Route::get('/', [ProductController::class, 'mainpage'])->name('mainpage');

Route::get('/makeproducts', [ProductController::class, 'gotocreate'])->name('goto.create');

Route::post('/products', [ProductController::class, 'store'])->name('products.create');

Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::post('/products/{product}', [ProductController::class, 'review'])->name('create.review');

// Route::get('/productscart', [ProductController::class, 'cart'])->name('products.cart');
Route::get('/productscart', [ProductController::class, 'cart'])->name('products.cart');

Route::post('/products/{product}/purchase', [ProductController::class, 'purchaseproduct'])->name('purchase');

Route::get('/products/review', [ReviewController::class, 'index'])->name('review.index');

Route::post('/products/{product}/submit-review', [ProductController::class, 'submitReview'])->name('products.submitReview');

Route::get('/checkout/{product}', [ProductController::class, 'checkout'])->name('products.checkout');

Route::post('/add-to-cart/{product}', [ProductController::class, 'addToCart'])->name('addToCart');

Route::get('/cart', [ProductController::class, 'viewCart'])->name('cart.show');

Route::delete('/cart/{product}', [ProductController::class, 'removeFromCart'])->name('cart.destroy');
