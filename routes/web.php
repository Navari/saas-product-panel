<?php

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

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::get('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('auth', [\App\Http\Controllers\AuthController::class, 'auth'])->name('auth');

Route::prefix('admin')->as('admin.')->middleware('auth')->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('products', \App\Http\Controllers\ProductController::class);
    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
    Route::resource('brands', \App\Http\Controllers\BrandController::class);
    Route::resource('attributes', \App\Http\Controllers\AttributeController::class);
});
