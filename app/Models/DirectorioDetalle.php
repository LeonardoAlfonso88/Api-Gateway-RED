<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DirectorioBase;

class DirectorioDetalle extends Model
{
    protected $table = 'directorioServiciosDetalle';
    protected $fillable = ['idServicioDetalle', 'llave','path','descripcion','metodo','idServicio'];
    protected $primaryKey = 'idServicioDetalle';
    public $timestamps = false;

    public function directorioBase()
    {
        return $this->belongsTo('App\Models\DirectorioBase', 'idServicio');
    }

}