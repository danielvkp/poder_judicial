@extends('base')
@section('main')

<div class="container">
    <div class="row">
        <div class="col s12">
            <h3 class="center-align">Registro</h3>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m6 offset-m3">
            <form class="" action="{{route('registro')}}" method="post">
                @csrf
                <div class="input-field col s12">
                    <input id="email" name="email" value="{{ old('email') }}" type="email">
                    <label for="email">Email</label>
                </div>

                <div class="input-field col s12">
                    <input id="password" name="password" value="{{ old('password') }}" type="password">
                    <label for="password">Password</label>
                </div>

                <div class="input-field col s12">
                    <button type="submit" class="btn btn-small green">Registrarse</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection