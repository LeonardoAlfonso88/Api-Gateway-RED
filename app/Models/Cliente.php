<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['idCliente', 'nombreCliente','apellidoCliente','correoCliente',
                           'celularCliente','calificacionCliente','numeroViajesCliente', 'documentoCliente',
                           'fechaRegistroCliente','fechaNacimientoCliente','contrasenaCliente'];
    protected $primaryKey = 'idCliente';
}