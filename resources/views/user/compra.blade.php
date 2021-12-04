@extends('base')
@section('main')

<div class="container">
    <div class="row">
        <div class="col s12">
            <h3 class="center-align">Comprar</h3>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m4 offset-m4">

            @if(session('mensaje'))
            <div class="alert alert-success">
                <span> {{ session('mensaje') }}</span>
            </div>
            @endif
            <form class="" action="{{route('user.comprar')}}" method="post">
                @csrf
                <select class="browser-default" name="producto_id">

                    @foreach($productos as $producto)
                    <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                    @endforeach
                </select>

                <button type="submit" class="bnt btn-small orange">Comprar</button>
            </form>
        </div>
    </div>
</div>

@endsection