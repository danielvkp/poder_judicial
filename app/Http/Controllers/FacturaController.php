<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\User;

class FacturaController extends Controller
{
    public function listaFacturas(){
      $facturas = Factura::with('user')->orderBy('created_at', 'DESC')->get();
      return view('admin.facturas.lista_facturas', compact('facturas'));
    }

    public function verFactura($id){
      $factura = Factura::where('id', $id)->with('user', 'items', 'items.producto')->get()->first();
      return view('admin.facturas.factura', compact('factura'));
    }

    public function generarFactura(){
      $users = User::whereHas('compra', function($q){
        $q->whereNull('factura_id');
      })->with(['compra.producto', 'compra' => function ($query){
        $query->whereNull('factura_id');
      }])->get();

      foreach($users as $key => $user) {
       $total = collect($user->compra)->reduce(function ($total, $item) {
          return [
              'total_productos'    => $total['total_productos'] + $item->producto->precio_sin_impuesto,
              'total' => $total['total'] + $item->producto->precio_total,
              'total_impuesto'     => $total['total_impuesto'] + ($item->producto->precio_total - $item->producto->precio_sin_impuesto)
           ];
         },[
          'total_productos' => 0,
          'total'           => 0,
          'total_impuesto'  => 0
         ]);

         $factura = $user->factura()->create($total);
         $user->compra()->whereNull('factura_id')->update(['factura_id' => $factura->id]);

      }

      return redirect()->route('admin.lista.facturas');
    }
}
