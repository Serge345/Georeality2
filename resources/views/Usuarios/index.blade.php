@extends('layouts.master')

@section('content')

<h1>Usuarios en el sistema:</h1>
<p class="lead">Lista de usuarios. <a href="{{url('usuario/create')}}">crear uno nuevo</a></p>
<hr>

<p>
  @foreach($usuarios as $usuario)

<h3>{{ $usuario->Nombre }}</h3>
<p>{{ $usuario->Email }}</p>

<p>
    <a href="{{ route('usuario.show', $usuario->id) }}" class="btn btn-info">Ver usuario</a>
    <a href="{{ route('usuario.edit', $usuario->id) }}" class="btn btn-primary">Editar usuario</a>
</p>

@endforeach

    <a href="{{ url('/') }}" class="btn btn-info">Volver al inicio</a>
</p>
<hr>


@stop
