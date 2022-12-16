<?php


namespace App\Http\Controllers;

use App\Models\FechaHora;
use App\Models\Hora;
use Illuminate\Http\Request;

class ReservaInfoController extends Controller
{
    public function find($id, $comensales)
    {
        $fecha_fk = FechaHora::select('fk_fecha')->where('id', $id)->get();
        $id_hora = FechaHora::select('id_hora')->where('id', $id)->get();
        $hora = Hora::select('hora')->where('id', $id_hora[0]['id_hora'])->get();
        return view('reserva2', ['fecha' => $fecha_fk, 'comensales' => $comensales, 'hora' => $hora]);
    }

    public function index()
    {
        return view('index');
    }
}
