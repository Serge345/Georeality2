@extends('layouts.master')


@section('content')

<h2>Editar Campus</h2>
<p class="lead"></p>
<hr>

{!! Form::open() !!}
<div class="row">
      <div class="input-field col s3">
          {!! Form::label('Nombre', 'Nombre'!!}
          {!! Form::text('Nombre', Nombre, ['class' => 'validate']) !!}
      </div>

      <div class="input-field col s3">
          {!! Form::label('Direccion', 'Direccion' !!}
          {!! Form::text('Direccion', 'Direccion', ['class' => 'validate']!!}
      </div>
</div>

{!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
<a href="{{ url('universidad') }}" class="btn btn-info">Cancelar</a>
{!! Form::close() !!}

@stop
