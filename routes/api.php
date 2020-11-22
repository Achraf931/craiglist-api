<?php

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

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
    Route::post('signin', [\App\Http\Controllers\Auth\SignInController::class, '__invoke']);
    Route::get('me', [\App\Http\Controllers\Auth\MeController::class, '__invoke']);
    Route::post('signout', [\App\Http\Controllers\Auth\SignOutController::class, '__invoke']);
    Route::get('favorites', [\App\Http\Controllers\FavoriteController::class, '__invoke']);
});

Route::get('/cities', [\App\Http\Controllers\CityController::class, 'index']);
Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index']);
Route::post('/subcategories', [\App\Http\Controllers\SubCategoryController::class, 'index']);
Route::post('/offers', [\App\Http\Controllers\OfferController::class, 'index']);
Route::get('/offer/{slug}', [\App\Http\Controllers\OfferController::class, 'show']);
