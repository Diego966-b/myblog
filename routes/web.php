<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'getHome']);

Route::get('auth/', function () {
  return view('auth/login');
});

Route::get('logout/', function () {
  return view('logout');
});

Route::get('category/', [CategoryController::class, 'getIndex']);
Route::get('category/show/{id}', [CategoryController::class, 'getShow']);
Route::get('category/edit/{id}', [CategoryController::class, 'getEdit']);
Route::get('category/create', [CategoryController::class, 'getCreate']);