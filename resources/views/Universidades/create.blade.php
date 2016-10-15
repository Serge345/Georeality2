@extends('layouts.master')
 

@section('content')

<h2>Añadir universidad</h2>
<p class="lead"></p>
<hr>

{!! Form::open(['route' => 'universidad.store']) !!}

<div class="input-field col s3">
    {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    {!! Form::label('Direccion', 'Direccion', ['class' => 'control-label']) !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>


{!! Form::submit('Añadir universidad', ['class' => 'btn btn-primary']) !!}
<a href="{{ url('universidad') }}" class="btn btn-info">Cancelar</a>
{!! Form::close() !!}

@stop
