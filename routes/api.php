<?php

use App\Http\Controllers\AuthApiController;
use App\Http\Controllers\CategoryApiController;
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
Route::get('/dashboard/category/index',[CategoryApiController::class,'index']);
Route::post('/dashboard/category/insert',[CategoryApiController::class,'insert']);
Route::post('/dashboard/category/update/{id}',[CategoryApiController::class,'update']);
Route::delete('/dashboard/category/remove/{id}',[CategoryApiController::class,'remove']);

// Authontication Api 
Route::post('/register',[AuthApiController::class,'register']);
Route::post('/login',[AuthApiController::class,'login']);