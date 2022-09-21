<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LogoutController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'dashboard'])->name('index')->middleware('auth');

Route::prefix('customer')->group(function(){
    Route::get('list', [CustomerController::class, 'index'])->name('customer.list')->middleware('auth');
    Route::get('add', [CustomerController::class, 'create'])->name('customer.create')->middleware('auth');
    
    Route::post('detail/{id}', [CustomerController::class, 'show'])->name('customer.show')->middleware('auth');
    Route::post('delete/{id}', [CustomerController::class, 'destroy'])->name('customer.delete')->middleware('auth');
    Route::post('save', [CustomerController::class, 'store'])->name('customer.save')->middleware('auth');

});

Route::prefix('product')->group(function(){
    Route::get('list', [ProductController::class, 'index'])->name('product.list')->middleware('auth');
    Route::get('add', [ProductController::class, 'create'])->name('product.create')->middleware('auth');
    
    Route::post('detail/{id}', [ProductController::class, 'show'])->name('product.show')->middleware('auth');
    Route::post('delete/{id}', [ProductController::class, 'destroy'])->name('product.delete')->middleware('auth');
    Route::post('save', [ProductController::class, 'store'])->name('product.save')->middleware('auth');

});

Route::prefix('category')->group(function(){
    Route::get('list', [CategoryController::class, 'index'])->name('category.list')->middleware('auth');
    Route::get('add', [CategoryController::class, 'create'])->name('category.create')->middleware('auth');
    
    Route::post('detail/{id}', [CategoryController::class, 'show'])->name('category.show')->middleware('auth');
    Route::post('delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete')->middleware('auth');
    Route::post('save', [CategoryController::class, 'store'])->name('category.save')->middleware('auth');

});


Auth::routes(['register' => false, 'reset' => false]);

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');