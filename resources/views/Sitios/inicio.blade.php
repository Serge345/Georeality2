@extends('layouts.master')

@section('content')

<h1>Bienvenido a Georeality</h1>
<h2>Seleccione una opción</h2>
<p class="lead">
</p>
<hr>
<a href="{{ url('sitio') }}" class="btn btn-info">Sitios</a>
<a href="{{ url('usuario') }}" class="btn btn-primary"> Usuarios</a>
<a href="{{ url('universidad') }}" class="btn btn-info">Universidades</a>


@stop
