<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('/products/create', [ProduitController::class, 'create'])->name('product.create')->middleware('auth');
Route::get('/home', [ProduitController::class, 'index'])->name('product.index')->middleware('auth');
Route::get('/products/{produit}', [ProduitController::class, 'show'])->name('product.show')->middleware('auth');
Route::post('/products', [ProduitController::class, 'store'])->name('product.store')->middleware('auth');
Route::delete('/products/{produit}', [ProduitController::class, 'destroy'])->name('product.destroy')->middleware('auth');

Route::fallback(function () {
    return view('404');
})->name('404');