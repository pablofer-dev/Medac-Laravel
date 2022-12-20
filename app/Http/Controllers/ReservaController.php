<?php


namespace App\Http\Controllers;

use App\Models\Hora;
use App\Models\FechaHora;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservaController extends Controller
{
    public function find(Request $request)
    {
        $this->validate($request, [
            'comensales' => 'required',
            'flexRadioDefault' => 'required',
            'date' => 'required',
        ]);
        $reservasInput = $request->collect();
        $result = FechaHora::select('*')->where('fk_fecha', $reservasInput['date'])->get();
        $data = [];

        foreach ($result as $key) {
            array_push(
                $data,
                [
                    'id' => $key->id,
                    'fk_fecha' => $key->fk_fecha,
                    'id_hora' => Hora::select('hora')->where('id', $key->id_hora)->get(),
                    'estado' => $key->estado,
                    'eleccion' => $key->eleccion,
                ]
            );
        }
      
        return redirect('/reservas')->with('mensaje', $data)->with('mensaje2', $reservasInput);
    }

    public function index()
    {
        return view('index');
    }
}
