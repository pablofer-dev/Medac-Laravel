<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Reserva;

class PerfilController extends Controller
{
    public function find()
    {
        if (Auth::user() != null) {
            $result = Reserva::select('*')->where('users_id', Auth::user()->id)->get();
        }
        return view('perfil', ['result' => $result]);
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
