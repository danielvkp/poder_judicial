@extends('base')
@section('main')

<div class="container">
    <div class="row">
        <div class="col s12">
            <h3 class="center-align">Productos</h3>
        </div>
    </div>

    <div class="row">
        <div class="col s12">

            <a href="{{ route('admin.ver.producto') }}" class="btn btn-small blue">Nuevo</a>

            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio con Impuesto</th>
                        <th>Impuesto %</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($productos as $producto)
                    <tr>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->precio_total}}$</td>
                        <td>{{$producto->impuesto}}%</td>
                        <td>
                            <a href="{{ route('admin.ver.producto', ['id' => $producto->id]) }}" class="btn btn-small blue">
                                <i class="material-icons">create</i>
                            </a>
                            <a href="{{ route('admin.eliminar.producto', ['id' => $producto->id]) }}" class="btn btn-small red">
                                <i class="material-icons">delete</i>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection