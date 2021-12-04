<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Producto;

class CompraController extends Controller
{
    public function verProductos(){
      $productos = Producto::all();
      return view('user.compra', compact('productos'));
    }

    public function comprar(Request $request){
      $user = Auth::user();

      $user->compra()->create([
        'producto_id' => $request->producto_id,
        'status'      => false,
      ]);
      
      return redirect()->back()->with(['mensaje' => 'exito']);
    }
}
