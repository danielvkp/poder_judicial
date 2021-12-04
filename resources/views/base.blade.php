<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prueba Poder Judicial</title>
    <link rel="stylesheet" href="{{URL::asset('assets/materialize/css/materialize.min.css')}}">
    <script src="{{URL::asset('assets/materialize/js/materialize.min.css')}}" charset="utf-8"></script>
</head>

<body>
    @include('nav.nav')
    @yield('main')
</body>

</html>