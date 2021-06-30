<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\TarjetaCreditoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PedidoController;

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
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'storecon'])->name('contactanos.store');
Route::get('tarjeta', [TarjetaCreditoController::class, 'index'])->name('tarjeta.index');
Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->middleware('can:admin.dashboard')->name('admin.dashboard');
Route::get('/dashboard/pedidos/{id_usuario}', [App\Http\Controllers\Admin\AdminController::class, 'pedidoDetalle'])->middleware('can:admin.dashboard')->name('admin.dashboard');
Route::get('/dashboard/pedidos/confirmar/{id_pedido}', [App\Http\Controllers\Admin\AdminController::class, 'confirmarEntrega'])->middleware('can:admin.dashboard')->name('admin.dashboard');
Route::get('/view-product/{id}', [App\Http\Controllers\HomeController::class, 'show']);
Route::get('/destroy/cart/{id_pedido}', [App\Http\Controllers\CarritoController::class, 'destroy']);

Route::resource('cart', CartController::class)->middleware(['auth']);
Route::resource('pedidos', PedidoController::class)->middleware(['auth']);;
Route::get('/formulario-de-pago', [App\Http\Controllers\PagoController::class, 'index']);
Route::get('/formulario-de-pago-carrito', [App\Http\Controllers\PagoController::class, 'pagoCarrito']);