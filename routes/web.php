<?php

Route::get('/', function () {
    return view('inicio.inicio');
})->name('inicio');

Route::get('/mostrar-registro', 'AuthController@mostrarRegistro')->name('mostar.registro');
Route::post('/registro', 'AuthController@registro')->name('registro');
Route::get('/mostrar-login', 'AuthController@mostrarLogin')->name('mostar.login');
Route::post('/login', 'AuthController@login')->name('login');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'has.role:1']], function() {
  Route::get('/admin-lista-productos', 'ProductoController@listadoProductos')->name('admin.lista.productos');
  Route::get('/admin-ver-producto', 'ProductoController@formProducto')->name('admin.ver.producto');
  Route::post('/admin-guardar-producto', 'ProductoController@guardarProducto')->name('admin.guardar.producto');
  Route::get('/admin-eliminar-producto/{id}', 'ProductoController@eliminarProducto')->name('admin.eliminar.producto');

  Route::get('/lista-facturas', 'FacturaController@listaFacturas')->name('admin.lista.facturas');
  Route::get('/generar-facturas', 'FacturaController@generarFactura')->name('admin.generar.facturas');
  Route::get('/ver-factura/{id}', 'FacturaController@verFactura')->name('admin.ver.factura');
});

Route::group(['middleware' => ['auth', 'has.role:2']], function() {
  Route::get('/ver-productos', 'CompraController@verProductos')->name('user.ver.productos');
  Route::post('comprar', 'CompraController@comprar')->name('user.comprar');
});
