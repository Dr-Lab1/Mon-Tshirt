<?php

use App\Http\Controllers\Shop\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shop\MainController;

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

Route::get('/', [MainController::class, 'index'])->name('accueil');

Route::get('/produit/{id}', [MainController::class, 'produit']) -> name('voir_produit');

Route::get('/categorie/{id}', [MainController::class, 'categorie']) -> name('categorie');

Route::get('/tag/{id}', [MainController::class, 'tag']) -> name('tag');

Route::post('/panier/add', [CartController::class, 'add']) -> name('cart_add');

Route::get('/panier/index', [CartController::class, 'index']) -> name('cart_index');