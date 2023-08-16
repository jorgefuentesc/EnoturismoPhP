<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionesTest extends Model
{
    protected $table = 'regiones_test';
    protected $primaryKey = 'id_regiones';
    public $timestamps = false;

    protected $fillable = [
        'nombre_regiones', 'regiones_vigencia', 'color', 'color_interior', 'color_circulo'
    ];

    // No se definen relaciones en este modelo.
}