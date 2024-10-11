<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index']);
Route::get('auth', [AuthController::class, 'index']);
Route::get('home', [HomeController::class, 'index']);
Route::get('cart', [CartController::class, 'index']);
