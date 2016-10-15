@extends('layouts.master')

@section('content')

<h2>Modificar un sitio</h2>
<p class="lead"></p>
<hr>

{!! Form::model($sitio, [
    'method' => 'PUT',
    'route' => ['sitio.update', $sitio->id]
]) !!}


<div class="input-field">
    {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::label('descripcion', 'Descripcion', ['class' => 'control-label']) !!}
    {!! Form::textarea('Descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::label('latitud', 'Latitud', ['class' => 'control-label', 'step' => '0']) !!}
    {!! Form::text('Latitud', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::label('longitud', 'Longitud', ['class' => 'control-label']) !!}
    {!! Form::text('Longitud', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Actualizar sitio', ['class' => 'btn btn-primary']) !!}
<a href="{{ url('/') }}" class="btn btn-info">Cancelar</a>
{!! Form::close() !!}

@stop
