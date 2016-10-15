<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Campus;

class campusController extends Controller
{

  public function create(Request $request){

    return view('Campus.create');
  }

  public function edit(Request $request,$id){
    try
      {
            $campus = Campus::findOrFail($id);

            return view('Campus.edit')->withcampus($campus);
       }
      catch(ModelNotFoundException $e)
       {
            Session::flash('flash_message', "El campus no fue encotrado, no se puede editar!");

            return redirect()->back();
        }

  }

  public function update(Request $request, $id){

    try
    {
      $campus = Campus::findOrFail($id);

     $this->validate($request, [
          'Nombre'        => 'required | string | max:150',
          'Direccion' => 'string | max:100'
      ]);

    $input = $request->all();

      $campus->fill($input)->save();

      Session::flash('flash_message', 'El campus ha sido actualizado');

      return redirect('/campus');
    }
    catch(ModelNotFoundException $e)
    {
      Session::flash('flash_message', "El campus no ha sido encotrado, no se puede actualizar");

      return redirect()->back();
    }

  }

  public function show(Request $request, $id){
     $campus = Campus::findOrFail($id);


  return view('Campus.show', ['campus' => $campus]);
  }

  public function store(Request $request){

    $input = $request->all();
      $this->validate($request, [
          'Nombre'        => 'required | string | max:150',
          'Direccion' => 'required | string | max:100'
      ]);
      Campus::create($input);


    return redirect('/campus');
  }

  public function index(Request $request){

    $campus = Campus::all();

  return view('Campus.index', ['campus' => $campus]);
  }


  public function destroy(Request $request, $id)
  {
    try
    {
      $campus= Campus::findOrFail($id);

      $campus->delete();

      Session::flash('flash_message', 'El campus se ha eliminado exitosamente!');

      return redirect()->route('campus.index');
    }
    catch(ModelNotFoundException $e)
    {
      Session::flash('flash_message', "El campus $id no fue eliminado, ha ocurrido un error");

      return redirect()->back();
    }
}
}
