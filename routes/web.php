<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// product
// product -> views
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
// product -> data access
Route::post('/product/post}', [ProductController::class, 'post'])->name('product.post');
Route::post('/product/put/{id}', [ProductController::class, 'put'])->name('product.put');
Route::post('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
