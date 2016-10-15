@extends('layouts.master')

@section('content')

<h1>Universidades</h1>
<p class="lead">Lista de universidades. <a href="{{url('universidad/create')}}">Añadir nueva</a></p>
<hr>



<p>
    <a href="{{url('universidad/show')}}" class="btn btn-info">Ver universidad</a>
    <a href="{{ url('/') }}" class="btn btn-info">Volver al inicio</a>
</p>
<hr>


@stop
