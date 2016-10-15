@extends('layouts.master')

@section('content')

<h1>Usuarios en el sistema:</h1>
<p class="lead">Lista de usuarios. <a href="{{url('usuario/create')}}">crear uno nuevo</a></p>
<hr>



<p>
    <a href="{{url('usuario/show')}}" class="btn btn-info">ver usuario</a>
    <a href="{{ url('/') }}" class="btn btn-info">Volver al inicio</a>
</p>
<hr>


@stop
