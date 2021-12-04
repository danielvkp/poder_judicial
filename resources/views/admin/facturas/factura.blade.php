@extends('base')
@section('main')

<div class="container">
    <div class="row">
        <div class="col s12">
            <h3 class="center-align">Factura</h3>
        </div>
    </div>
    <div class="row">

        <div class="col s12">
            <h3 class="center-align">Productos</h3>

            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Impuesto</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($factura->items as $compra)
                    <tr>
                        <td>{{$compra->producto->nombre}}</td>

                        <td>{{$compra->producto->precio_sin_impuesto}}</td>

                        <td>{{$compra->producto->precio_total - $compra->producto->precio_sin_impuesto}}</td>

                        <td>{{$compra->producto->precio_total}} </td>
                    </tr>
                    @endforeach

                </tbody>

                <tfoot>
                    <tr>
                        <td> <strong>TOTALES</strong> </td>
                        <td><strong>{{$factura->total_productos}}<strong></td>

                        <td><strong>{{$factura->total_impuesto}}<strong></td>

                        <td><strong>{{$factura->total}}<strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@endsection