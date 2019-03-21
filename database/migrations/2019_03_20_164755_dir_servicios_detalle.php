<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DirServiciosDetalle extends Migration
{

    public function up()
    {
        if (!Schema::hasTable('directorioServiciosDetalle'))
        {
            Schema::create('directorioServiciosDetalle', function (Blueprint $table) {
                $table->increments('idServicioDetalle');
                $table->string('llave')->unique();
                $table->string('path')->unique();
                $table->longText('descripcion');
                $table->string('metodo');
                $table->unsignedInteger('idServicio');
            }); 
        }
    }

    public function down()
    {
        Schema::dropIfExists('directorioServiciosDetalle');
    }
}
