<?php


namespace App\Http\Controllers;

use App\Models\Hora;
use App\Models\Mesa;
use App\Models\Reserva;
use App\Models\FechaHora;
use App\Models\UsuarioNR;
use App\Models\CreditCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class ReservaConfirmationController extends Controller
{
    public function store(Request $request)
    {
        /* $request->form6Example11 */
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
            $mesa = Mesa::create([
                'numero_comensal' => $request->comensales,
            ]);
            $id = FechaHora::select('id_hora')->where('id', Session::get('id'))->get();
            $resultHoraId = Hora::select('id')->where('id', $id[0]['id_hora'])->get();
            $reserva = Reserva::create([
                'numero_persona' => $request->comensales,
                'users_id' => Auth::user()->id,
                'menu_id' => $request->menu,
                'tarjeta_creadito_id' => $request->card,
                'usuarionr_id' => null,
                'mesa_id' => $mesa->id,
                'fecha_fk' => Session::get('fecha'),
                'hora_id' => $resultHoraId[0]['id'],
            ]);
            $affected = DB::table('fecha_hora')
                ->where('id', Session::get('id'))
                ->update(['estado' => 'reservada']);
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
                'numero_comensal' => $request->comensales,
            ]);
            $id = FechaHora::select('id_hora')->where('id', Session::get('id'))->get();
            $resultHoraId = Hora::select('id')->where('id', $id[0]['id_hora'])->get();
            $reserva = Reserva::create([
                'numero_persona' => $request->comensales,
                'users_id' => null,
                'menu_id' => $request->menu,
                'tarjeta_creadito_id' => $request->card,
                'usuarionr_id' => $usuarioNR->id,
                'mesa_id' => $mesa->id,
                'fecha_fk' => Session::get('fecha'),
                'hora_id' => $resultHoraId[0]['id'],
            ]);
            $affected = DB::table('fecha_hora')
                ->where('id', Session::get('id'))
                ->update(['estado' => 'reservada']);
        }
        return redirect('/')->with('mensaje', "Reserva realizada con saticfación");
    }

    public function index()
    {
        return view('index');
    }
}
