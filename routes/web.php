<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class,'main']);

Route::get('/dashboard',[DashboardController::class,'dashboard']);

Route::get('/dashboard/index', [DashboardController::class,'index'])->name('index');

Route::get('/dashboard/create',[DashboardController::class,'create'])->name('create');

Route::post('/dashboard/insert',[DashboardController::class,'insert'])->name('insert');

Route::get('/dashboard/edit/{id}',[DashboardController::class,'edit'])->name('edit');

Route::put('/dashboard/update/{id}',[DashboardController::class,'update'])->name('update');

Route::delete('/dashboard/remove/{id}',[DashboardController::class,'remove'])->name('remove');

Route::get('/search',[AjaxController::class,'search'])->name('search');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
