@extends('layouts.master')

@section('content')

<h1>Informacion del campus</h1>
<h1>{{ $campus->Nombre }}</h1>
<h3>Direccion:</h3>
<p class="flow-text">{{ $campus->Direccion }}</p>

<table class="striped">

  <td>Fecha Creación</td>
  <td>{{ $campus->created_at }}</td>
</tr>
<tr>
  <td>Última modificación</td>
  <td>{{ $campus->updated_at }}</td>
</tr>
</table>

<hr>
<p>
<a href="{{ route('campus.index') }}" class="waves-effect waves-light btn light-blue accent-3">Volver a la lista</a>
{!! Form::open([
    'method' => 'DELETE',
    'route' => ['campus.destroy', $campus->id]
]) !!}
    {!! Form::submit('Borrar campus', ['class' => 'btn red darken-4']) !!}
{!! Form::close() !!}


<a href="{{url('/')}}" class="waves-effect waves-light btn blue-darken-3">Volver al inicio</a>
</p>
@stop
