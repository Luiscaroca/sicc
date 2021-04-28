<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;

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

Route::get('/', function () {
    return view('auth.login');

});

Route::group(array('before' => 'auth'), function() {
    Route::resource('unidades','App\Http\Controllers\UnidadController');
    Route::resource('usuarios','App\Http\Controllers\UserController');
    Route::resource('articulos','App\Http\Controllers\ArticuloController');
    Route::resource('pusers','App\Http\Controllers\PuserController');
    Route::resource('inventarios', 'App\Http\Controllers\InventarioController');
    Route::post('/prestamos/edit','App\Http\Controllers\PrestamoController@update');
    Route::resource('prestamos','App\Http\Controllers\PrestamoController');
    Route::resource('detalleprestamos','App\Http\Controllers\DetalleprestamoController');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');

