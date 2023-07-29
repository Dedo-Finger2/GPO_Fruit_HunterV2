<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DayController;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\RarityController;
use App\Http\Controllers\UserController;
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

// Home
Route::get('/', [HomeController::class, 'index'])->name('home.index')->middleware('auth');

// Usuário
Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class)->except(['users.create']);
});

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

// Autenticação
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'destroy'])->name('login.logout');

// Dia
Route::get('/days', [DayController::class, 'index'])->name('days.index');

// Fruta
Route::get('/fruits', [FruitController::class, 'index'])->name('fruits.index');


// Raridade
Route::get('/rarities', [RarityController::class, 'index'])->name('rarities.index');
Route::get('/rarities/create', [RarityController::class, 'create'])->name('rarities.create');
Route::post('/rarities', [RarityController::class, 'store'])->name('rarities.store');
Route::get('/rarities/{rarity}/edit', [RarityController::class, 'edit'])->name('rarities.edit');
Route::put('/rarities/{rarity}', [RarityController::class, 'update'])->name('rarities.update');
Route::delete('/rarities/{rarity}', [RarityController::class, 'destroy'])->name('rarities.destroy');


// Conta
Route::get('/accounts', [AccountController::class, 'index'])->name('accounts.index');
