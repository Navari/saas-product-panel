<?php

use Illuminate\Support\Facades\Route;

Route::get('products/list', [\App\Http\Controllers\ProductController::class, 'list'])->name('products.list');
Route::get('products/{product}/variations', [\App\Http\Controllers\ProductController::class, 'variations'])->name('products.variations');
Route::get('attributes/list', [\App\Http\Controllers\AttributeController::class, 'list'])->name('attributes.list');
Route::get('categories/list', [\App\Http\Controllers\CategoryController::class, 'list'])->name('categories.list');
Route::get('brands/list', [\App\Http\Controllers\BrandController::class, 'list'])->name('brands.list');
