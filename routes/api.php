<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CetagoryController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\SubcetagoryController;

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

Route::group(['middleware'=>'api','prefix'=>'auth'],function($router){
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/categories', [CetagoryController::class, 'index']);
Route::post('/category', [CetagoryController::class, 'store']);
Route::put('/category/{id}', [CetagoryController::class, 'update']);
Route::delete('/category/{id}', [CetagoryController::class, 'destory']);


Route::get('/subcategories', [SubcetagoryController::class, 'index']);
Route::post('/subcategory', [SubcetagoryController::class, 'store']);


Route::get('/supsubcategories', [SupSubcetagoryController::class, 'index']);
Route::post('/supsubcategory', [SupSubcetagoryController::class, 'store']);


Route::get('/currencies', [CurrencyController::class, 'index']);
Route::post('/currency', [CurrencyController::class, 'store']);


