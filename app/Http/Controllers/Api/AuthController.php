<?php

namespace App\Http\Controllers\Api;

use App\Models\Hora;
use App\Models\User;
use App\Models\Fecha;
use App\Models\Reserva;
use App\Models\FechaHora;
use App\Models\UsuarioNR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Create User
     * @param Request $request
     * @return User
     */
    public function createUser(Request $request)
    {
        try {
            //Validated
            $validateUser = Validator::make(
                $request->all(),
                [
                    'name' => 'required',
                    'apellido' => 'required',
                    'telefono' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required'
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $user = User::create([
                'name' => $request->name,
                'apellido' => $request->apellido,
                'telefono' => $request->telefono,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Login The User
     * @param Request $request
     * @return User
     */
    public function loginUser(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email',
                    'password' => 'required'
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            if (!Auth::attempt($request->only(['email', 'password']))) {
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password does not match with our record.',
                ], 401);
            }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function reservas()
    {
        try {
            $result = Reserva::select('*')->get();
            $array = array();
            foreach ($result as $key) {
                if ($key->users_id != null) {
                    array_push(
                        $array,
                        [
                            'id' => $key->id,
                            'users_id' => $key->users_id,
                            'user' => User::select('name', 'apellido', 'telefono', 'email')->where('id', $key->users_id)->first(),
                            'usuarionr_id' => $key->usuarionr_id,
                            'menu_id' => $key->menu_id,
                            'tarjeta_creadito_id' => $key->tarjeta_creadito_id,
                            'mesa_id' => $key->mesa_id,
                            'fecha_fk' => $key->fecha_fk,
                            'hora' => Hora::select('hora')->where('id', $key->hora_id)->first()->hora,
                        ]
                    );
                } else {
                    array_push(
                        $array,
                        [
                            'id' => $key->id,
                            'users_id' => $key->users_id,
                            'user' => UsuarioNR::select('nombre', 'apellido', 'email', 'telefono', 'dni')->where('id', $key->usuarionr_id)->first(),
                            'usuarionr_id' => $key->usuarionr_id,
                            'menu_id' => $key->menu_id,
                            'tarjeta_creadito_id' => $key->tarjeta_creadito_id,
                            'mesa_id' => $key->mesa_id,
                            'fecha_fk' => $key->fecha_fk,
                            'hora' => Hora::select('hora')->where('id', $key->hora_id)->first()->hora,
                        ]
                    );
                }
            }
            return response()->json($array, 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 600);
        }
    }

    public function misreservas(Request $request)
    {
        try {
            $result = Reserva::select('*')->where('users_id', $request->id)->get();
            $array = array();
            foreach ($result as $key) {
                if ($key->users_id != null) {
                    array_push(
                        $array,
                        [
                            'id' => $key->id,
                            'users_id' => $key->users_id,
                            'user' => User::select('name', 'apellido', 'telefono', 'email')->where('id', $key->users_id)->first(),
                            'usuarionr_id' => $key->usuarionr_id,
                            'menu_id' => $key->menu_id,
                            'tarjeta_creadito_id' => $key->tarjeta_creadito_id,
                            'mesa_id' => $key->mesa_id,
                            'fecha_fk' => $key->fecha_fk,
                            'hora' => Hora::select('hora')->where('id', $key->hora_id)->first()->hora,
                        ]
                    );
                }
            }
            return response()->json($array, 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 700);
        }
    }


    public function deletereservas(Request $request)
    {
        try {
            $result = Reserva::select('*')->where('id', $request->id)->delete();
            return response()->json($result, 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 700);
        }
    }

    public function horasreservas(Request $request)
    {
        try {
            $result = FechaHora::select('fk_fecha')->where('id', $request->id)->get();
            $result = FechaHora::select('id_hora')->where('fk_fecha', $result[0]->fk_fecha)->get();
            $array = array();
            foreach ($result as $key) {
                array_push(
                    $array,
                    [
                        'id' => $key->id_hora,
                        'hora' => Hora::select('hora')->where('id', $key->id_hora)->first()->hora,
                    ]
                );
            }
            return response()->json($array, 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 700);
        }
    }

    public function reservar(Request $request)
    {
        try {
            $user = UsuarioNR::create([
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'email' => $request->email,
                'telefono' => $request->telefono,
                'dni' => $request->dni,
            ]);
            $reserva = Reserva::create([
                'numero_persona' => $request->comensales,
                'users_id' => null,
                'menu_id' => $request->menu,
                'tarjeta_creadito_id' => $request->credito,
                'usuarionr_id' => $user->id,
                'mesa_id' => 1,
                'fecha_fk' => FechaHora::select('fk_fecha')->where('id', $request->id)->get()->first()->fk_fecha,
                'hora_id' => FechaHora::select('id_hora')->where('id', $request->id)->get()->first()->id_hora,
            ]);
            $affected = DB::table('fecha_hora')
                ->where('id', $request->id)
                ->update(['estado' => 'reservada']);
            return response()->json(true, 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 700);
        }
    }


    public function eventos()
    {
        try {
            $result = FechaHora::select('fk_fecha', 'id')->where('estado', 'no-reservada')->get();
            $array = array();
            $cont = 0;
            foreach ($result as $key) {
                array_push(
                    $array,
                    [
                        'title' => 'Disponible',
                        'id' => $result[$cont]->id,
                        'start' => $result[$cont]->fk_fecha,
                        'end' => $result[$cont]->fk_fecha,
                    ]
                );
                $cont++;
            }

            return response()->json($array, 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 700);
        }
    }
}
