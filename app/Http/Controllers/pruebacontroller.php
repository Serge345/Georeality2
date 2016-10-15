<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pruebacontroller extends Controller
{
    //

    public function home (){
      return view('prueba.home');
    }
}
