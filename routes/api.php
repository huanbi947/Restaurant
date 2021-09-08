<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodApiController;
use App\Http\Controllers\FoodchefApiController;
use App\Http\Controllers\CartApiController;
use App\Http\Controllers\OrderApiController;
use App\Http\Controllers\ReservationApiController;
use App\Http\Controllers\UserApiController;
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
Route::resource('food', FoodApiController::class);
Route::resource('foodchef',FoodchefApiController::class);
Route::resource('cart',CartApiController::class);
Route::resource('order',OrderApiController::class);
Route::resource('reservation',ReservationApiController::class);
Route::resource('user',UserApiController::class);



