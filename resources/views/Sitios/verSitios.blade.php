@extends('layouts.master')

@section('content')

<h1>Sitios de interés registrados:</h1>
<p class="lead">Lista de sitios. <a href="{{url('sitio/create')}}">crear uno nuevo</a></p>
<hr>



<p>
  @foreach($sitios as $sitio)

<h3>{{ $sitio->Nombre }}</h3>
<p>{{ $sitio->Descripcion }}</p>

<p>
    <a href="{{ route('sitio.show', $sitio->id) }}" class="btn btn-info">Ver Sitio</a>
    <a href="{{ route('sitio.edit', $sitio->id) }}" class="btn btn-primary">Editar Sitio</a>
</p>

@endforeach

    <a href="{{ url('/') }}" class="btn btn-info">Volver al inicio</a>

</p>
<hr>


@stop
