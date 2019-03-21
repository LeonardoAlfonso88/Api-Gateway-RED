<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DirectorioDetalle;

class DirectorioBase extends Model
{
    protected $table = 'directorioServiciosBase';
    protected $fillable = ['idServicio', 'baseUrl','servicio'];
    protected $primaryKey = 'idServicio';
    public $timestamps = false;

    public function directorioDetalles()
    {
        return $this->hasMany('App\Models\DirectorioDetalle','idServicio');
    }
}
