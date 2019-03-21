<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ConfiguracionRespuestaSeeder::class);
        $this->call(DirectorioServiciosSeeder::class);
        $this->call(ParametrosGeneralesSeeder::class);
    }
}
