<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;
use App\Models\ParametroGeneral;

class ServiceParameterConfiguration
{
    protected $parametrosConfiguracion;

    public function __construct()
    {
        $this->respuestasCorrectas = ParametroGeneral::all();
    }

    public function getParametro($parametro)
    {
        return $this->respuestasCorrectas->where('parametro',$parametro)->first();
    }
}
