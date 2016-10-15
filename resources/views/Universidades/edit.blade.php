@extends('layouts.master')
 

@section('content')

<h2>Editar Universidad</h2>
<p class="lead"></p>
<hr>

{!! Form::open() !!}

<div class="input-field col s3">
    {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    {!! Form::label('Direccion', 'Direccion', ['class' => 'control-label']) !!}
    {!! Form::text('Direccion', null, ['class' => 'form-control']) !!}
</div>


{!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
<a href="{{ url('universidad') }}" class="btn btn-info">Cancelar</a>
{!! Form::close() !!}

@stop
