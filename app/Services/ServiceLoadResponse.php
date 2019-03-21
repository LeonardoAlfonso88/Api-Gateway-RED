<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;
use App\Models\ConfiguracionRespuesta;

class ServiceLoadResponse
{
    protected $respuestasCorrectas;

    public function __construct()
    {
        $this->respuestasCorrectas = ConfiguracionRespuesta::where('respuestaCorrecta',1)
                                                           ->pluck('codigo');
    }

    public function validateResponse($code)
    {
        return $this->respuestasCorrectas->contains($code);
    }
}