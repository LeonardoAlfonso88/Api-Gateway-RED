<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['idCliente', 'nombre','apellido','correo', 'celular','calificacion','numeroViajes', 'tipoDocumento', 'documento',
                           'fechaRegistro','fechaNacimiento','contrasena'];
    protected $primaryKey = 'idCliente';

}
