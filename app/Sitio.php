<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sitio extends Model
{
     protected $fillable = [
        'Nombre',
        'Descripcion',
        'Latitud',
        'Longitud',
        'Tipo'
    ];
}
