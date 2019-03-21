<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConfiguracionRespuesta extends Model
{
    protected $table = 'configuracionRespuestas';
    protected $fillable = ['idCodigo', 'codigo','respuestaCorrecta'];
    protected $primaryKey = 'idCodigo';
    public $timestamps = false;
}
