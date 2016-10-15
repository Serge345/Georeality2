@extends('layouts.master')

@section('content')

<h1>Informacion del sitio</h1>
<h1>{{ $sitio->Nombre }}</h1>
<h2>Descripcion:</h2>
<p class="lead">{{ $sitio->Descripcion }}</p>

<table class="striped">
  <td>Latitud</td>
  <td>{{ $sitio->Latitud }}</td>
</tr>
<tr>
  <td>Longitud</td>
  <td>{{ $sitio->Longitud }}</td>
</tr>
<tr>
  <td>Fecha Creación</td>
  <td>{{ $sitio->created_at }}</td>
</tr>
<tr>
  <td>Última modificación</td>
  <td>{{ $sitio->updated_at }}</td>
</tr>
</table>

<hr>
<p>
<a href="{{ route('sitio.index') }}" class="waves-effect waves-light btn light-blue accent-3">Volver a la lista</a>
{!! Form::open([
    'method' => 'DELETE',
    'route' => ['sitio.destroy', $sitio->id]
]) !!}
    {!! Form::submit('¿Borrar sitio?', ['class' => 'waves-effect waves-light btn red darken-4']) !!}
{!! Form::close() !!}


<a href="{{url('/')}}" class="waves-effect waves-light btn blue-darken-3">Volver al inicio</a>
</p>
@stop
