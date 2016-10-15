<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class universidadController extends Controller
{
    //
     public function create(Request $request){

      return view('Universidades.create');
    }

    public function edit(Request $request){

      return view('Universidades.edit');
    }

    public function update(Request $request){

      return view('Sitios.inicio');
    }

    public function show(Request $request){

    return view('Universidades.show');
    }

    public function store(Request $request){
      return view('Sitios.inicio');
    }

    public function index(Request $request){

      return view('Universidades.index');
    }

    public function delete(Request $request){

    	return view('Universidades.index');
    }
}
