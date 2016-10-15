@extends('layouts.master')

@section('content')

<h1>Informacion del sitio</h1>



<a href="{{url('sitio')}}" class="waves-effect waves-light btn blue-darken-3">Volver</a>
<a href="{{url('sitio/edit')}}" class="btn btn-primary">editar sitio</a>

@stop
