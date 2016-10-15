@extends('layouts.master')

@section('content')

<h1>Campus encontrados:</h1>
<p class="lead">Estos son los campus disponibles <a href="{{url('campus/create')}}">agregar uno nuevo</a></p>
<hr>



<p>
  @foreach($campus as $campus)

<h3>{{ $campus->Nombre }}</h3>
<p>{{ $campus->Direccion}}</p>

<p>
    <a href="{{ route('campus.show', $campus->id) }}" class="btn btn-info">Ver campus</a>
    <a href="{{ route('campus.edit', $campus->id) }}" class="btn btn-primary">Editar campus</a>
</p>

@endforeach

    <a href="{{ url('/') }}" class="btn btn-info">Volver al inicio</a>

</p>
<hr>


@stop
