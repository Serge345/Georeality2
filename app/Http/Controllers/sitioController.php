<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

              return view('Sitios.edit')->withSitio($sitio);
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
            'Nombre'        => 'required | string | alpha_dash | max:100',
            'Descripcion' => 'required | string | alpha_num',
            'Latitud'    => 'required | numeric | min:-180 | max:180',
            'Longitud'   => 'required | numeric | min:-180 | max:180',
            'Tipo'     => 'required | string | in:punto de interes,dependencia'
        ]);
      
      $input = $request->all();

        $sitio>fill($input)->save();

        Session::flash('flash_message', 'El sitio ha sido actualizado');

        return redirect('Sitios.inicio');
      }
      catch(ModelNotFoundException $e)
      {
        Session::flash('flash_message', "El sitio no ha sido encotrado, no se puede actualizar");

        return redirect()->back();
      }
      return view('Sitios.inicio');
    }

    public function show(Request $request, $id){
       $sitio = Sitio::findOrFail($id);

    
    return view('Sitios.show', ['sitio' => $sitio])
    }

    public function store(Request $request){

      $input = $request->all();
        $this->validate($request, [
            'Nombre'        => 'required | string | alpha_dash | max:100',
            'Descripcion' => 'required | string | alpha_num',
            'Latitud'    => 'required | numeric | min:-180 | max:180',
            'Longitud'   => 'required | numeric | min:-180 | max:180',
            'Tipo'     => 'required | string | in:punto de interes,dependencia'
        ]);
        Sitio::create($input);

        
      return redirect('Sitios.inicio');
    }

    public function index(Request $request){

      $sitios = Sitio::all();

    return view('Sitios.verSitios', ['sitios' => $sitios]);
    }

}
