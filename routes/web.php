<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ReporteInventarioController;

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
    Route::resource('inventarios','App\Http\Controllers\InventarioController');
    Route::post('/prestamos/edit','App\Http\Controllers\PrestamoController@update');
    Route::resource('prestamos','App\Http\Controllers\PrestamoController');
    Route::resource('detalleprestamos','App\Http\Controllers\DetalleprestamoController');
    Route::resource('estado','App\Http\Controllers\EstadoController');
    Route::resource('reporte_inventarios','App\Http\Controllers\ReporteInventarioController');
    Route::resource('reporte_usuarios','App\Http\Controllers\ReporteUsuarioController');
    Route::resource('reporte_articulos','App\Http\Controllers\ReporteArticulosController');
    Route::resource('reporte_articulos_vigentes','App\Http\Controllers\ReporteArticulosVigentesController');
    Route::resource('reporte_articulos_dados_baja','App\Http\Controllers\ReporteArticulosDadosBajaController');
    Route::resource('reporte_prestamos','App\Http\Controllers\ReportePrestamosController');
    Route::resource('reporte_prestamos_vigentes','App\Http\Controllers\ReportePrestamosVigentesController');
    Route::resource('reporte_prestamos_devolucion','App\Http\Controllers\ReportePrestamosPendientesController');
    Route::resource('reporte_boleta','App\Http\Controllers\ReporteBoletaController');
    Route::resource('reporte_factura','App\Http\Controllers\ReporteFacturaController');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');

