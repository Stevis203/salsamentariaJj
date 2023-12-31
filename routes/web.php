<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\clienteController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/categorias', [App\Http\Controllers\cateController::class, 'index'])->name('cate.index');

Route::get('/administrador', [App\Http\Controllers\AdministradorController::class, 'index'])->name('administrador.index');

Route::get('/index', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente.index');

Route::get('/cambiar-paginacion/{perPage}', 'productosController@cambiarPaginacion')->name('cambiarPaginacion');


Route::get('productos', [App\Http\Controllers\productosController::class, 'index'])->name('productos.index');
Route::get('imagenes', [App\Http\Controllers\productosController::class, 'show'])->name('imagenes');




