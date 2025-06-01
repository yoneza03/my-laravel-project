<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShoppingFuelController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index']);

Route::get('/shopping-fuel', [ShoppingFuelController::class, 'index'])->name('shoppingFuel.index');
Route::post('/shopping-fuel', [ShoppingFuelController::class, 'store'])->name('shoppingFuel.store');
Route::get('/shopping-fuel/{id}', [ShoppingFuelController::class, 'show'])->name('shoppingFuel.show');
Route::put('/shopping-fuel/{id}', [ShoppingFuelController::class, 'update'])->name('shoppingFuel.update');
Route::delete('/shopping-fuel/{id}', [ShoppingFuelController::class, 'destroy'])->name('shoppingFuel.destroy');