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
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Usuário
Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/register', [UserController::class, 'create'])->name('user.create');
Route::get('/users/{user}/config', [UserController::class, 'config'])->name('user.config');

// Autenticação
Route::get('/login', [LoginController::class, 'index'])->name('login.index');

// Dia
Route::get('/days', [DayController::class, 'index'])->name('day.index');

// Fruta
Route::get('/fruits', [FruitController::class, 'index'])->name('fruit.index');


// Raridade
Route::get('/rarities', [RarityController::class, 'index'])->name('rarity.index');


// Conta
Route::get('/accounts', [AccountController::class, 'index'])->name('account.index');
