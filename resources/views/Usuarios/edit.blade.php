@extends('layouts.master')


@section('content')

<h2>Editar usuario</h2>
<p class="lead"></p>
<hr>

{!! Form::model($usuario, [
    'method' => 'PUT',
    'route' => ['usuario.update', $usuario->id]
]) !!}



<div class="input-field col s3">
    {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    {!! Form::label('Email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::email('Email', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    {!! Form::label('Password', 'Password', ['class' => 'control-label', 'step' => '0']) !!}
    {!! Form::password('Password', null, ['class' => 'form-control']) !!}
</div>
<div class="input field col s3">
  {!! Form::label('Privilegios', 'Privilegios', ['for' => 'Tipo']) !!}
  {!! Form::select('Tipo', array('usuario' => 'Usuario', 'administrador' => 'Administrador')) !!}
</div>



{!! Form::submit('Actualizar Usuario', ['class' => 'btn btn-primary']) !!}
<a href="{{ url('/usuario') }}" class="btn btn-info">Cancelar</a>
{!! Form::close() !!}

@stop
