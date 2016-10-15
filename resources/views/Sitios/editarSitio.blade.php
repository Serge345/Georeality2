@extends('layouts.master')

@section('content')

<h2>Modificar un sitio</h2>
<p class="lead"></p>
<hr>

{!! Form::model($network, [
    'method' => 'PUT',
    'route' => ['sitio.update', 0]
]) !!}


<div class="input-field">
    {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::label('descripcion', 'Descripcion', ['class' => 'control-label']) !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::label('latitud', 'Latitud', ['class' => 'control-label', 'step' => '0']) !!}
    {!! Form::text('latitud', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::label('longitud', 'Longitud', ['class' => 'control-label']) !!}
    {!! Form::text('longitud', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field">
    {!! Form::label('tipo', 'Tipo', ['class' => 'control-label']) !!}
    {!! Form::select('tipo', array('punto de interes'=>'punto de interes','dependencia'=> 'dependencia')) !!}
</div>

{!! Form::submit('Agregar sitio', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@stop
