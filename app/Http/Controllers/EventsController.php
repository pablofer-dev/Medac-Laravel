<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\FechaHora;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function find()
    {
        $result = FechaHora::where('estado', 'no-reservada')->groupBy('fk_fecha')->get();
        $data = array();
        foreach ($result as $row) {
            $data[] = array(
                'id' => $row->fk_fecha,
                'title' => 'Reservar',
                'start' => $row->fk_fecha,
                'end' => $row->fk_fecha,
                
            );
        }
        return response()->json($data);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
