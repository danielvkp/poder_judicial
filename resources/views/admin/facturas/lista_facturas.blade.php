@extends('base')
@section('main')

<div class="container">
    <div class="row">
        <div class="col s12">
            <h3 class="center-align">Facturas</h3>
        </div>
    </div>
    <div class="row">

        <a href="{{route('admin.generar.facturas')}}" class="btn btn-small orange">Generar Facturas</a>

        <div class="col s12">
            <h3 class="center-align">Lista</h3>


            <table>
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Total sin impuesto</th>
                        <th>Total impuesto</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($facturas as $factura)
                    <tr>
                        <td>{{$factura->user->email}}</td>

                        <td>{{$factura->total_productos}}</td>

                        <td>{{$factura->total_impuesto}}</td>

                        <td>{{$factura->total}}</td>

                        <td>
                            <a href="{{ route('admin.ver.factura', ['id' => $factura->id]) }}" class="btn btn-small orange">
                                <i class="material-icons">edit</i>
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