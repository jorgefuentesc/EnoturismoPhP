<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegionesTest;
use App\Models\VinnasTest;
use App\Models\RegistroVotosTest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class DatosVotacionController extends Controller
{
    public function metodoCargarDatosVotacion(Request $request)
    {
        dd("FUNCIINIIO");
        $regiones = RegionesTest::all();
        dd($regiones);
        $vinnas = VinnasTest::all();
        $votos_experiencia = RegistroVotosTest::where('tipo_registro', 'experienciaENO')->get();
        $votos = $votos_experiencia->count();
        Log::info('Cantidad de votos: ' . $votos); // Registra en el archivo de registro

        $lista_regiones = [];
        
        foreach ($regiones as $region) {
            if ($region->regiones_vigencia == 1) {
                $viñas_de_region = $vinnas->where('region_id', $region->id);
                $viñas_data = $viñas_de_region->map(function ($viña) {
                    return [
                        'nombre_vinna' => $viña->nombre_vinna,
                        'img_url' => $viña->img_url,
                        'id' => $viña->id,
                    ];
                });

                $viñas_data = $viñas_data->shuffle(); // Reorganizar la colección de viñas aleatoriamente
                $viñas_data->all();
                $region_data = [
                    'id_region' => $region->id,
                    'region' => $region->nombre_regiones,
                    'viñas' => $viñas_data->pluck('nombre_vinna'),
                    'imagenViñas' => $viñas_data->pluck('img_url'),
                    'id_viñas' => $viñas_data->pluck('id'),
                    'colorFondo' => $region->color,
                    'colorCirculo' => $region->color_circulo,
                    'colorInterior' => $region->color_interior,
                    'votos_cantidad_experiencia' => $votos,
                ];
                $lista_regiones[] = $region_data;
            }
        }

        shuffle($lista_regiones); // Reorganizar las regiones aleatoriamente
        return new JsonResponse($lista_regiones);
    }
}
