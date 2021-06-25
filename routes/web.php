<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/image', [App\Http\Controllers\ImageController::class, 'store']);
Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->middleware('can:admin.dashboard')->name('admin.dashboard');
Route::get('/view-product/{id}', [App\Http\Controllers\HomeController::class, 'show']);

Route::resource('cart', CartController::class);
Route::get('/formulario-de-pago', [App\Http\Controllers\PagoController::class, 'index']);