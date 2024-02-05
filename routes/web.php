<?php

use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});

Route::get('/product/create', [ProduitController::class, 'create'])->name('product.create');
Route::get('/product', [ProduitController::class, 'index'])->name('product.index');
Route::get('/product/{produit}', [ProduitController::class, 'show'])->name('product.show');
Route::post('/product', [ProduitController::class, 'store'])->name('product.store');
Route::delete('/product/{produit}', [ProduitController::class, 'destroy'])->name('product.destroy');

Route::fallback(function () {
    return view('404');
})->name('404');