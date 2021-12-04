@extends('base')
@section('main')

<div class="container">
    <div class="row">
        <div class="col s12">
            <h3 class="center-align">Guardar / Editar Producto</h3>
        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <form class="" action="{{route('admin.guardar.producto')}}" method="post">
                @csrf

                <input type="hidden" name="id" value="{{ old('id', $producto->id) }}">

                <div class="input-field col s12">
                    <input id="nombre" name="nombre" value="{{ old('nombre', $producto->nombre) }}" type="text">
                    <label for="nombre">Nombre</label>
                </div>

                <div class="input-field col s12">
                    <input type="number" step="0.01" id="precio_total" name="precio_total" value="{{ old('precio_total', $producto->precio_total) }}">
                    <label for="precio_total">Precio</label>
                </div>

                <div class="input-field col s12">
                    <input type="number" id="impuesto_dos" step="0.01" name="impuesto" value="{{ old('impuesto', $producto->impuesto) }}">
                    <label for="impuesto_dos">Impuesto</label>
                </div>

                <div class="input-field col s12">
                    <button type="submit" class="btn btn-small green">Guardar</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection