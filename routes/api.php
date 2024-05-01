<?php

use App\Http\Controllers\AuthApiController;
use App\Http\Controllers\MealApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get data
Route::get('/dashboard/index',[MealApiController::class,'index']);
Route::post('/dashboard/insert',[MealApiController::class,'insert']);
Route::post('/dashboard/update/{id}',[MealApiController::class,'update']);
Route::delete('/dashboard/remove/{id}',[MealApiController::class,'remove']);

// Authontication Api 
Route::post('/register',[AuthApiController::class,'register']);
Route::post('/login',[AuthApiController::class,'login']);