@extends('layouts.master')
 

@section('content')

<h2>Editar usuario</h2>
<p class="lead"></p>
<hr>

{!! Form::open() !!}

<div class="input-field col s3">
    {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    {!! Form::label('Email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::text('email', email, ['class' => 'form-control']) !!}
</div>

<div class="input-field col s3">
    {!! Form::label('Password', 'Password', ['class' => 'control-label', 'step' => '0']) !!}
    {!! Form::text('Password', password, ['class' => 'form-control']) !!}
</div>


{!! Form::submit('Crear usuario', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@stop
