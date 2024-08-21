<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
//________________user routes____________________
Route::apiResource('users', UserController::class);

//________________order routes____________________
Route::apiResource('orders', OrderController::class);

//________________category routes____________________
Route::delete('/categories/deleteAll', [CategoryController::class, 'deleteAllCategories']);
Route::apiResource('categories', CategoryController::class);
//________________product routes____________________
Route::apiResource('products', ProductController::class);
