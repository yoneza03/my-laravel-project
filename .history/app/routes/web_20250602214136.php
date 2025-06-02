<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShoppingFuelController;
use App\Http\Controllers\SharedController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/shopping-fuel', [ShoppingFuelController::class, 'store'])->name('shoppingFuel.store');
Route::get('/shopping-fuel/{id}', [ShoppingFuelController::class, 'show'])->name('shoppingFuel.show');
Route::put('/shopping-fuel/{id}', [ShoppingFuelController::class, 'update'])->name('shoppingFuel.update');
Route::delete('/shopping-fuel/{id}', [ShoppingFuelController::class, 'destroy'])->name('shoppingFuel.destroy');
Route::get('/shopping-fuel', [ShoppingFuelController::class, 'index']);

Route::get('/shared', [SharedController::class, 'index']);
