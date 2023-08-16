<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VotosUsuarios extends Model
{
    protected $table = 'votos_usuarios';
    protected $primaryKey = 'id_usuario_voto';
    public $timestamps = false;

    protected $fillable = [
        'pasaporte', 'nombre', 'correo_electronico'
    ];

    // No se definen relaciones en este modelo, ya que no tienes en el modelo de Django.
}
