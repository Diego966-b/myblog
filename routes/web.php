<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('auth/', function () {
  return view('auth/login');
});

Route::get('logout', function () {
  return view('logout');
});

Route::get('category/', function () {
  return view('category/index');
});

Route::get('category/show/{id}', function () {
  return view('category/show');
});

Route::get('category/create/', function () {
  return view('category/create');
});

Route::get('category/edit/{id}', function () {
  return view('category/edit');
});
