<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParametroGeneral extends Model
{
    protected $table = 'parametrosConfiguracion';
    protected $fillable = ['idParametroConfiguracion','parametro','descripcion','valor'];
    protected $primaryKey = 'idParametroConfiguracion';
    public $timestamps = false;
}
