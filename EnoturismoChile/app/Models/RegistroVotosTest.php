<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroVotosTest extends Model
{
    protected $table = 'registro_votos_test';
    protected $primaryKey = 'id_registros';
    public $timestamps = false;

    protected $fillable = [
        'tipo_registro', 'registro_vigencia', 'correo_electronico', 'pasaporte'
    ];

    public function vinna()
    {
        return $this->belongsTo(VinnasTest::class, 'vinna_id');
    }

    public function region()
    {
        return $this->belongsTo(RegionesTest::class, 'region_id');
    }
}