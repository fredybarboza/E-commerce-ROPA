<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ProductosController;



//Dashboard
Route::resource('usuarios', UsersController::class);
Route::resource('productos', ProductosController::class);

Route::get('/crear-producto', [App\Http\Controllers\Admin\AdminController::class, 'createView']);


