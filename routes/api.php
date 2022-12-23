<?php

use App\Http\Controllers\api\ApiCartController;
use App\Http\Controllers\api\ApiMainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [ApiMainController::class, 'index']);

Route::get('/produit/{id}', [ApiMainController::class, 'produit']);

Route::get('/categorie/{id}', [ApiMainController::class, 'categorie']) -> name('categorie');

Route::get('/tag/{id}', [ApiMainController::class, 'tag']);

Route::post('/panier/add', [ApiCartController::class, 'add']);

Route::get('/panier/index', [ApiCartController::class, 'index']);