<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RespuestasConfiguracion extends Migration
{
    //Migration
    public function up()
    {
        if (!Schema::hasTable('configuracionRespuestas')){
            Schema::create('configuracionRespuestas', function (Blueprint $table) {
                $table->increments('idCodigo');
                $table->integer('codigo')->unique();
                $table->integer('respuestaCorrecta')->default(0);
            });
        }
    }

    //Reverse Migration
    public function down()
    {
        Schema::dropIfExists('configuracionRespuestas');
    }
}
