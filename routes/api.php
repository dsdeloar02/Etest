<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CetagoryController;
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

Route::get('/categories', [CetagoryController::class, 'index']);
Route::get('/category', [CetagoryController::class, 'store']);

Route::get('/subcategories', [SubcetagoryController::class, 'index']);
Route::post('/subcategory', [SubcetagoryController::class, 'store']);

Route::get('/supsubcategories', [SupSubcetagoryController::class, 'index']);
Route::post('/supsubcategory', [SupSubcetagoryController::class, 'store']);

