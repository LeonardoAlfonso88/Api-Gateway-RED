<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParametrosGenerales extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('parametrosConfiguracion'))
        {
            Schema::create('parametrosConfiguracion', function (Blueprint $table) {
                $table->increments('idParametroConfiguracion');
                $table->string('parametro')->unique();
                $table->string('descripcion');
                $table->string('valor');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('parametrosConfiguracion');
    }
}
