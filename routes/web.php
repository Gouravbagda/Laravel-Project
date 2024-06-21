<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('categories', [App\Http\Controllers\CategoryController::class,'index']);
Route::get('categories/create',[App\Http\Controllers\CategoryController::class,'create']);
Route::post('categories/create',[App\Http\Controllers\CategoryController::class,'store']);