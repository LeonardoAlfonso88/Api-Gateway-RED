<?php

use Illuminate\Database\Seeder;
use App\Models\ParametroGeneral;

class ParametrosGeneralesSeeder extends Seeder
{
    public function run()
    {
        $parametrosConfiguracion = ParametroGeneral::all();

        $parametrosConfiguracion->each(function ($item, $key) {
            $item->delete();
        });

        $json = File::get("database/initialData/parametrosConfiguracion.json");
        $data = json_decode($json);

        foreach ($data as $key) {
            ParametroGeneral::create(array(
                'parametro' => $key->parametro,
                'descripcion' => $key->descripcion,
                'valor' => $key->valor,
            ));
        }
    }
}
