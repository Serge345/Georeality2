<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class usuarioController extends Controller
{
    //
  
    public function create(Request $request){

      return view('Usuarios.create');
    }

    public function edit(Request $request){

      return view('Usuarios.edit');
    }

    public function update(Request $request){

      return view('Sitios.inicio');
    }

    public function show(Request $request){

    return view('Usuarios.show');
    }

    public function store(Request $request){
      return view('Sitios.inicio');
    }

    public function index(Request $request){

      return view('Usuarios.index');
    }

    public function delete(Request $request){

    	return view('Usuarios.index');
    }
}
