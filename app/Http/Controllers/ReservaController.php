<?php


namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function find(Request $request)
    {

        $this->validate($request, [
            'comensales' => 'required',
            'flexRadioDefault' => 'required',
            'date' => 'required',
        ]);

        $reservasDataBase = Reserva::all();
        $reservasInput = $request->collect();
        $horasReserva = [];
        $horaOcupada = [];
        foreach ($reservasDataBase as $key) {
            if ($key['fecha'] == $reservasInput['date']) {
                if ($key['eleccion'] == 'comida') {
                    if ($key['estado'] == 'no-reservada') {
                        array_push($horasReserva, $key['hora']);
                    } elseif ($key['estado'] == 'reservada') {
                        array_push($horaOcupada, $key['hora']);
                    }
                } elseif ($key['eleccion'] == 'cena') {
                    if ($key['estado'] == 'no-reservada') {
                        array_push($horasReserva, $key['hora']);
                    } elseif ($key['estado'] == 'reservada') {
                        array_push($horaOcupada, $key['hora']);
                    }
                }
            }
        }
        return redirect('/reservas')->with('mensaje', [$horasReserva, $horaOcupada]);
    }

    public function index()
    {
        return view('index');
    }

}
