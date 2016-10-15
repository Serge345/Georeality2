@extends('layouts.master')

@section('content')

<h1>Sitios de interés registrados:</h1>
<p class="lead">Lista de sitios. <a href="{{url('sitio/create')}}">crear uno nuevo</a></p>
<hr>



<p>
    <a href="{{url('sitio/show')}}" class="btn btn-info">ver sitio</a>
    <a href="{{ url('/') }}" class="btn btn-info">Volver al inicio</a>
    
</p>
<hr>


@stop
