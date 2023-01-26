<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Reserva;
use App\Models\FechaHora;
use Illuminate\Support\Facades\DB;

class PerfilController extends Controller
{
    public function find()
    {
        if (Auth::user() != null) {
            $result = Reserva::select('*')->where('users_id', Auth::user()->id)->get();
        }
        return view('perfil', ['result' => $result]);
    }

    public function delete()
    {
        $fecha = Reserva::where('id', Auth::user()->id)->get()[0]['fecha_fk'];
        $hora = Reserva::where('id', Auth::user()->id)->get()[0]['hora_id'];
        $affected = DB::table('fecha_hora')->where('id_hora', $hora)->update(['estado' => 'no-reservada']);
        Reserva::where('users_id', Auth::user()->id)->delete();
        return redirect('/')->with('mensaje2', "Se ha borrado la reserva con satisfacción");;
    }


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('index');
    }
}
