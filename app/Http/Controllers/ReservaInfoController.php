<?php


namespace App\Http\Controllers;

use App\Models\Hora;
use App\Models\Menu;
use App\Models\FechaHora;
use App\Http\Controllers\Controller;

class ReservaInfoController extends Controller
{
    public function find($id)
    {
        session()->put('id', $id);
        $fecha_fk = FechaHora::select('fk_fecha')->where('id', $id)->get();
        $id_hora = FechaHora::select('id_hora')->where('id', $id)->get();
        $hora = Hora::select('hora')->where('id', $id_hora[0]['id_hora'])->get();
        $menus = Menu::all();
        return view('reserva2', ['fecha' => $fecha_fk, 'hora' => $hora, 'menus' => $menus]);
    }

    public function index()
    {
        return view('index');
    }
}
