
@extends('layouts.master')

@section('content')

<h1>Informacion del usuario</h1>
<h1>{{ $usuario->nombre }}</h1>

<table class="striped">
  <td>Correo electronico</td>
  <td>{{ $usuario->email }}</td>
</tr>
<tr>
  <td>Tipo de usuario</td>
  <td>{{ $usuario->privilegio }}</td>
</tr>
<tr>
  <td>Fecha Creación</td>
  <td>{{ $usuario->created_at }}</td>
</tr>
<tr>
  <td>Última modificación</td>
  <td>{{ $usuario->updated_at }}</td>
</tr>
</table>

<hr>
<p>
<a href="{{ route('usuario.index') }}" class="waves-effect waves-light btn light-blue accent-3">Volver a la lista</a>
{!! Form::open([
    'method' => 'DELETE',
    'route' => ['usuario.destroy', $usuario->id]
]) !!}
    {!! Form::submit('Eliminar usuario', ['class' => 'btn red darken-4']) !!}
{!! Form::close() !!}


<a href="{{url('/')}}" class="waves-effect waves-light btn blue-darken-3">Volver al inicio</a>
</p>
@stop
