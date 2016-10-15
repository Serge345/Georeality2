@extends('layouts.master')


@section('content')

<script type="text/javascript">

$(document).ready(function() {
    $('select').material_select();
});

</script>
<h2>Agregar un nuevo sitio</h2>
<p class="lead"></p>
<hr>

{!! Form::open(['route' => 'sitio.store']) !!}

<div class="input-field col s5">
    <label for="Nombre">Nombre</label>
    {!! Form::text('Nombre', null, ['class' => 'form-control', 'Placeholder' =>'Pepito Perez']) !!}
</div>

<div class="input-field col s5">
    {!! Form::label('descripcion', 'Descripcion', ['class' => 'control-label']) !!}
    {!! Form::textarea('Descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    {!! Form::label('Latitud', 'Latitud', ['class' => 'control-label', 'step' => '0']) !!}
    {!! Form::text('Latitud', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    {!! Form::label('longitud', 'Longitud', ['class' => 'control-label']) !!}
    {!! Form::text('Longitud', null, ['class' => 'form-control']) !!}
</div>


{!! Form::submit('Agregar sitio', ['class' => 'btn btn-primary']) !!}
<a href="{{ url('sitio') }}" class="btn btn-info">Cancelar</a>
{!! Form::close() !!}

@stop
