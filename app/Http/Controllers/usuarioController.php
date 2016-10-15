<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
class usuarioController extends Controller
{
    //


    public function perfil(Request $request){
      return view('Usuarios.perfil');
    }

    public function create(Request $request){
      return view('Usuarios.create');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
            'Nombre'      => 'required | string | max:40',
            'Email'       => 'required | email',
            'Password'    => 'required | string |min:6| max:30',
            'Tipo'  => 'required | string |in:administrador,usuario'
        ]);
        $input = $request->all();

        User::create($input);
        Session::flash('flash_message', 'El usuario nuevo se ha creado con exito!');
        return redirect('/usuario');
    }

    public function index(Request $request)
{
    $usuarios = User::all();

    return view('Usuarios.index', ['usuarios' => $usuarios]);
}

public function edit(Request $request, $id)
{
  try
  {
    $usuario = User::findOrFail($id);

    return view('Usuarios.edit')->withUsuario($usuario);
  }
  catch(ModelNotFoundException $e)
  {
    Session::flash('flash_message', "el usuario $id no ha sido encontrado!");

    return redirect()->back();
  }
}

public function update(Request $request, $id)
    {
      try
      {
        $usuario = User::findOrFail($id);

        $this->validate($request, [
              'Nombre'      => 'required | string  | max:40',
              'Email'       => 'required | email',
              'Password'    => 'required | string |min:6 | max:30',
              'Tipo'  => 'required | string |in:administrador,usuario'
          ]);
        $input = $request->all();

        $usuario->fill($input)->save();

        Session::flash('flash_message', 'El perfil del usuario ha sido actualizado');

        return redirect('/usuario');
      }
      catch(ModelNotFoundException $e)
      {
        Session::flash('flash_message', "El usuario $id no ha sido encontrado!");

        return redirect()->back();
      }
    }

    public function show(Request $request, $id)
{
  try{
    $usuario = User::findOrFail($id);

    return view('Usuarios.show')->withUsuario($usuario);
  }
  catch(ModelNotFoundException $e)
  {
    Session::flash('flash_message', "El usuario $id no ha sido encontrado!");

    return redirect()->back();
  }
}


public function destroy(Request $request, $id)
{
  try
  {
    $usuario = User::findOrFail($id);

    $usuario->delete();

    Session::flash('flash_message', 'El usuario se ha eliminado');

    return redirect()->route('usuario.index');
  }
  catch(ModelNotFoundException $e)
  {
    Session::flash('flash_message', "El usuario $id no ha sido encontrado!");

    return redirect()->back();
  }
}
}
