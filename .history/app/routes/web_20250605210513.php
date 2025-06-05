<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ShoppingFuelController;
use App\Http\Controllers\SharedController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/shopping-fuel', [ShoppingFuelController::class, 'store'])->name('shoppingFuel.store');
Route::get('/shopping-fuel/{id}', [ShoppingFuelController::class, 'show'])->name('shoppingFuel.show');
Route::put('/shopping-fuel/{id}', [ShoppingFuelController::class, 'update'])->name('shoppingFuel.update');
Route::delete('/shopping-fuel/{id}', [ShoppingFuelController::class, 'destroy'])->name('shoppingFuel.destroy');
Route::get('/shopping-fuel', [ShoppingFuelController::class, 'index']);

Route::get('/shared', [SharedController::class, 'index']);
Route::get('/password-reset', [PasswordResetController::class, 'showRequestForm'])->name('password_reset_request');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');
