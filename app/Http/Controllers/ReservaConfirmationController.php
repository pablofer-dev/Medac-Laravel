<?php


namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\UsuarioNR;
use App\Models\FechaHora;
use App\Models\CreditCard;
use App\Models\Mesa;
use App\Models\Hora;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class ReservaConfirmationController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required | min:3 | max:30',
            'apellido' => 'required | min:3 | max:30',
            'email' => 'required | email',
            'telefono' => 'required | integer | digits:9 ',
            'cp' => 'required | integer',
            'pais' => 'required | min:2 | max:30',
            'nacimiento' => 'required | date',
            'card' => 'required | min:3 | max:30',
            'flexRadioDefault' => 'required',
        ]);
        if (Auth::user() != null) {
            /* Usuario Registrado */
        } else {
            /* Usuario No Registrado */
            $usuarioNR = UsuarioNR::create([
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'email' => $request->email,
                'telefono' => $request->telefono,
                'dni' => null,
            ]);

            $mesa = Mesa::create([
                'numero_comensal' => Session::get('comensales'),
            ]);
            $id = FechaHora::select('id_hora')->where('id', Session::get('id'))->get();
            $resultHoraId = Hora::select('id')->where('id', $id[0]['id_hora'])->get();
            $reserva = Reserva::create([
                'numero_persona' => Session::get('comensales'),
                'users_id' => null,
                'menu_id' => 1,
                'tarjeta_creadito_id' => $request->card,
                'usuarionr_id' => $usuarioNR->id,
                'mesa_id' => $mesa->id,
                'fecha_fk' => Session::get('fecha'),
                'hora_id' => $resultHoraId[0]['id'],
            ]);

            return redirect('/reservas-confirmacion')->with('mensaje', 2);
        }
    }

    public function index()
    {
        return view('index');
    }
}
