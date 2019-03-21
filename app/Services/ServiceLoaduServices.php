<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;
use App\Models\DirectorioBase;
use App\Models\DirectorioDetalle;

class ServiceLoaduServices
{
    protected $directorioServicios;

    public function __construct()
    {
        $this->directorioServicios = DirectorioDetalle::all();
    }

    public function getUrl($llave)
    {
        $detalle = $this->directorioServicios->where('llave',$llave)->first();
        $servicio = $detalle->directorioBase;
        $url = $servicio->baseUrl.$detalle->path;
        return $url;
    }

    public function getMetodo($llave)
    {
        $detalle = $this->directorioServicios->where('llave',$llave)->first();
        $metodo = $detalle->metodo;
        return $metodo;
    }


}
