<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;



//Dashboard
Route::resource('usuarios', UsersController::class);
//Route::post('/role', 'App\Http\Controllers\PedidoController@index')
//Customer

