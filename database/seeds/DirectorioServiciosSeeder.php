<?php

use Illuminate\Database\Seeder;
use App\Models\DirectorioBase;
use App\Models\DirectorioDetalle;

class DirectorioServiciosSeeder extends Seeder
{
    public function run()
    {
        $this->borrarTablas();
        $json = File::get("database/initialData/uServicesPaths.json");
        $data = json_decode($json);

        foreach ($data as $servicio) {
            $directorioBase = new DirectorioBase();
            $directorioBase->baseUrl = $servicio->baseUrl;
            $directorioBase->servicio = $servicio->servicio;
            $directorioBase->save();

            foreach ($servicio->detalle as $detalle)
            {
                $directorioDetalle = new DirectorioDetalle();
                $directorioDetalle->llave = $detalle->llave;
                $directorioDetalle->path = $detalle->path;
                $directorioDetalle->descripcion = $detalle->descripcion;
                $directorioDetalle->metodo = $detalle->metodo;
                $directorioDetalle->idServicio = $directorioBase->idServicio;
                $directorioDetalle->save();
            }
        }        
    }

    private function borrarTablas()
    {
        $directorioBase = DirectorioBase::all();
        $directorioDetalle = DirectorioDetalle::all();

        $directorioDetalle->each(function ($item, $key) {
            $item->delete();
        });

        $directorioBase->each(function ($item, $key) {
            $item->delete();
        });
    }
}
