<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservaInfoController extends Controller
{
    public function find(Request $request)
    {
        dd($request->all());
    }

    public function index()
    {
        return view('index');
    }
}
