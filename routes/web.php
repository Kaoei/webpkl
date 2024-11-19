<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\OrderController;

Route::middleware(['auth'])->group(function () {
    Route::get('/order/{productId}/create', [OrderController::class, 'showForm'])->name('order.createForm');
    Route::post('/order/create', [OrderController::class, 'createOrder'])->name('order.create');
});

Route::get('/sort', [HomeController::class, 'sortBy'])->name('sort');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/list', [HomeController::class, 'list'])->name('list');
Route::get('/detail/{id_product}', [HomeController::class, 'details'])->name('detail');
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

Auth::routes();

Route::middleware(['is_admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/admin/order', [OrderController::class, 'order'])->name('order');
    Route::put('/order/update/{id_order}', [OrderController::class, 'update'])->name('order.update');
    Route::get('/order/detail/{id_order}', [OrderController::class, 'detail'])->name('order.detail');
    Route::delete('/order/delete/{id_order}', [OrderController::class, 'destroy'])->name('order.delete');

    Route::get('/product', [ProductController::class, 'product'])->name('product');
    Route::get('/product/create', [ProductController::class, 'createProduct'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'create'])->name('product.store');
    Route::get('/product/detail/{id_product}', [ProductController::class, 'detail'])->name('product.detail');
    Route::get('/product/edit/{id_product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/update/{id_product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/delete/{id_product}', [ProductController::class, 'delete'])->name('product.delete');

    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
});
