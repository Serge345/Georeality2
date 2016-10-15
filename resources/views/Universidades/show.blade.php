
@extends('layouts.master')

@section('content')

<h1>Informacion de la universidad</h1>



<a href="{{url('universidad')}}" class="waves-effect waves-light btn blue-darken-3">Volver</a>
<a href="{{url('universidad/edit')}}" class="btn btn-primary">Guardar cambios</a>
@stop

