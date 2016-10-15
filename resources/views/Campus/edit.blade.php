@extends('layouts.master')


@section('content')

<h2>Editar Campus</h2>
<p class="lead"></p>
<hr>

{!! Form::model($campus, [
    'method' => 'PUT',
    'route' => ['campus.update', $campus->id]
]) !!}

<div class="row">
      <div class="input-field col s3">
          {!! Form::label('Nombre', 'Nombre', ['for'=> 'Nombre'])!!}
          {!! Form::text('Nombre', null, ['class' => 'validate']) !!}
      </div>

      <div class="input-field col s3">
          {!! Form::label('Direccion', 'Direccion', ['for'=>'Direccion'])!!}
          {!! Form::text('Direccion', null, ['class' => 'validate'])!!}
      </div>
</div>

{!! Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) !!}
<a href="{{ url('/campus') }}" class="btn btn-info">Cancelar</a>
{!! Form::close() !!}

@stop
