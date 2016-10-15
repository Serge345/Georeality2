<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Sitio;

class sitioController extends Controller
{
    //

    public function inicio(){

      return view('Sitios.inicio');
    }

    public function create(Request $request){

      return view('Sitios.agregarSitio');
    }

    public function edit(Request $request,$id){
      try
        {
              $sitio = Sitio::findOrFail($id);

              return view('Sitios.editarSitio')->withSitio($sitio);
         }
        catch(ModelNotFoundException $e)
         {
              Session::flash('flash_message', "El sitio no fue encotrado, no se puede editar!");

              return redirect()->back();
          }

    }

    public function update(Request $request, $id){

      try
      {
        $sitio = Sitio::findOrFail($id);

       $this->validate($request, [
            'Nombre'        => 'required | string | max:100',
            'Descripcion' => 'required | string ',
            'Latitud'    => 'required | numeric | min:-180 | max:180',
            'Longitud'   => 'required | numeric | min:-180 | max:180',
            'Tipo'     => 'string | in:punto de interes,dependencia'
        ]);

      $input = $request->all();

        $sitio->fill($input)->save();

        Session::flash('flash_message', 'El sitio ha sido actualizado');

        return redirect('/sitio');
      }
      catch(ModelNotFoundException $e)
      {
        Session::flash('flash_message', "El sitio no ha sido encotrado, no se puede actualizar");

        return redirect()->back();
      }

    }

    public function show(Request $request, $id){
       $sitio = Sitio::findOrFail($id);


    return view('Sitios.show', ['sitio' => $sitio]);
    }

    public function store(Request $request){

      $input = $request->all();
        $this->validate($request, [
            'Nombre'        => 'required | string | max:100',
            'Descripcion' => 'required | string',
            'Latitud'    => 'required | numeric | min:-180 | max:180',
            'Longitud'   => 'required | numeric | min:-180 | max:180',
            'Tipo'     => 'string | in:punto de interes,dependencia'
        ]);
        Sitio::create($input);


      return redirect('/');
    }

    public function index(Request $request){

      $sitios = Sitio::all();

    return view('Sitios.verSitios', ['sitios' => $sitios]);
    }

        
    public function destroy(Request $request, $id)
    {
      try
      {
        $sitio= Sitio::findOrFail($id);

        $sitio->delete();

        Session::flash('flash_message', 'El sitio se ha eliminado exitosamente!');

        return redirect()->route('sitio.index');
      }
      catch(ModelNotFoundException $e)
      {
        Session::flash('flash_message', "El sitio $id no fue eliminado, ha ocurrido un error");

        return redirect()->back();
      }
}

}
