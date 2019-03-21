<?php

use Illuminate\Database\Seeder;
use App\Models\ConfiguracionRespuesta;

class ConfiguracionRespuestaSeeder extends Seeder
{
    public function run()
    {
        $respuestas = ConfiguracionRespuesta::all();

        $respuestas->each(function ($item, $key) {
            $item->delete();
        });

        $json = File::get("database/initialData/respuestasCorrectas.json");
        $data = json_decode($json);

        foreach ($data as $key) {
            ConfiguracionRespuesta::create(array(
                'codigo' => $key->codigo,
                'respuestaCorrecta' => $key->respuestaCorrecta,
            ));
        }
    }
}
