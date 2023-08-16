<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VinnasTest extends Model
{
    protected $table = 'vinnas_test';
    protected $primaryKey = 'id_vinnas';
    public $timestamps = false;

    protected $fillable = [
        'nombre_vinna', 'img_url', 'vinnas_vigencia', 'vinna_url_img_md', 'vinna_descripcion', 'vinna_titulo'
    ];

    public function region()
    {
        return $this->belongsTo(RegionesTest::class, 'region_id');
    }

    // No se definen relaciones con RegistroVotosTest en este modelo.
}