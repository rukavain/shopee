<?php

use App\Http\Controllers\ProductController;
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


Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get('/productslist', [ProductController::class, 'gotoprodlist'])->name('products.list');

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

Route::get('/mainpage', [ProductController::class, 'mainpage'])->name('mainpage');

Route::get('/makeproducts', [ProductController::class, 'gotocreate'])->name('goto.create');

Route::post('/products', [ProductController::class, 'store'])->name('products.create');

Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::post('/products/{product}/purchase', [ProductController::class, 'purchase'])->name('products.purchase');

