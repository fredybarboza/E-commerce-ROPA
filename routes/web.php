<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\TarjetaCreditoController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/image', [App\Http\Controllers\ImageController::class, 'store']);
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'storecon'])->name('contactanos.store');
Route::get('tarjeta', [TarjetaCreditoController::class, 'index'])->name('tarjeta.index');
Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->middleware('can:admin.dashboard')->name('admin.dashboard');
Route::get('/view-product/{id}', [App\Http\Controllers\HomeController::class, 'show']);