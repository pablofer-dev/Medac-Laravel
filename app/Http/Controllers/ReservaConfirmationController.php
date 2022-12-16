<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\UsuarioNR;


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
            UsuarioNR::create([
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'email' => $request->email,
                'telefono' => $request->telefono,
            ]);
        }
    }

    public function index()
    {
        return view('index');
    }
}
