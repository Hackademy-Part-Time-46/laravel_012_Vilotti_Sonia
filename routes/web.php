<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('create', [ProductController::class, 'create'])->name('create');
Route::post('store', [ProductController::class, 'store'])->name('store');
Route::get('show/{product}', [ProductController::class, 'show'])->name('show');
Route::get('edit/{product}', [ProductController::class, 'edit'])->name('edit');
Route::put('update', [ProductController::class, 'update'])->name('update');
Route::delete('delete/{product}', [ProductController::class, 'destroy'])->name('delete'); //resources route products

Route::get('categories-index', [CategoryController::class, 'categoriesIndex'])->name('categories-index'); //resources route categories
Route::get('categories-create', [CategoryController::class, 'categoriesCreate'])->name('categories-create');
Route::post('categories-store', [CategoryController::class, 'categoriesStore'])->name('categories-store');
Route::get('categories-show/{category}', [CategoryController::class, 'categoriesShow'])->name('categories-show');
Route::get('categories-edit/{category}', [CategoryController::class, 'categoriesEdit'])->name('categories-edit');
Route::put('categories-update', [CategoryController::class, 'categoriesUpdate'])->name('categories-update');
Route::delete('categories-delete/{category}', [CategoryController::class, 'categoriesDestroy'])->name('categories-delete');
