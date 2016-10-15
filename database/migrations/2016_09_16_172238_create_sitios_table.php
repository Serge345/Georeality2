<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitio', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Nombre', '200');
            $table->String('Descripcion')->nullable();
            $table->String('Latitud');
            $table->String('Longitud');
            $table->enum('Tipo', ['dependencia', 'punto de interes'])->default("punto de interes");
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sitio');
    }
}
