
@extends('layouts.master')

@section('content')

<h1>Informacion de Usuario</h1>



<a href="{{url('usuario')}}" class="waves-effect waves-light btn blue-darken-3">Volver</a>
<a href="{{url('usuario/edit')}}" class="btn btn-primary">editar usuario</a>
@stop

