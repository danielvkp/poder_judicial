<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function listadoProductos(){
      $productos = Producto::orderBy('created_at')->get();
      return view('admin.productos.lista_productos', compact('productos'));
    }

    public function formProducto(Request $request){
      $producto = $request->has('id') ? Producto::find($request->id) : new Producto();
      return view('admin.productos.form_producto', compact('producto'));
    }

    public function guardarProducto(Request $request){
      Producto::updateOrCreate(['id' => $request->id], $request->all());
      return redirect()->route('admin.lista.productos');
    }

    public function eliminarProducto($id){
      Producto::find($id)->delete();
      return redirect()->route('admin.lista.productos');
    }
}
