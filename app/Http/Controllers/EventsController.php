<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\FechaHora;
use App\Models\Hora;
use Illuminate\Http\Request;


class EventsController extends Controller
{
    public function find()
    {
        $data = array();
        $result = FechaHora::select('id', 'fk_fecha')->where('estado', 'no-reservada')->get();
        $data = array();
        foreach ($result as $key) {
            $data[] = array(
                'id' => $key->id,
                'title' => 'Disponible',
                'start' => $key->fk_fecha,
                'end' => $key->fk_fecha,
            );
        }
        return response()->json($data);
    }
    public function horasAjax(Request $Request)
    {
        $result = FechaHora::select('id_hora')->where('fk_fecha', $Request->fecha)->where('estado', 'no-reservada')->get();
        $data[] = array(
            'id' => FechaHora::select('id')->where('fk_fecha', $Request->fecha)->where('estado', 'no-reservada')->get(),
            'hora' => Hora::select('hora')->where('id', $result[0]['id_hora'])->get(),
        );
        return response()->json($data);
    }
}
