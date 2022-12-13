<?php


namespace App\Http\Controllers;

use App\Models\Hora;
use App\Models\Fecha;
use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function store(Request $request)
    {

        $this->validate($request, [
            'comensales' => 'required',
            'flexRadioDefault' => 'required',
            'date' => 'required',
        ]);
        $hora = Hora::all();
        $fecha = Fecha::all();
        if ($request->input('flexRadioDefault') == 'comida') {
            $hora = $hora->where('fecha', '>=', "18:59:59");
        } else {
            $hora = $hora->where('fecha', '<=', "18:59:59");
        }
        return redirect('/reservas')->with('mensaje', $hora);
    }

    public function index()
    {
        return view('index');
    }

    public function find($radio, $date)
    {
    }
}
