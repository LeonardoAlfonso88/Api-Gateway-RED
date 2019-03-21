<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DirServiciosBase extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('directorioServiciosBase'))
        {
            Schema::create('directorioServiciosBase', function (Blueprint $table) {
                $table->increments('idServicio');
                $table->string('baseUrl');
                $table->longText('servicio');
            }); 
        }
    }

    public function down()
    {
        Schema::dropIfExists('directorioServiciosBase');
    }
}
