<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\UsuarioNR;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Reserva;
use App\Models\Hora;


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
                            'user' => User::select('name','apellido','telefono','email')->where('id', $key->users_id)->first(),
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
                            'user' => UsuarioNR::select('nombre','apellido','email','telefono','dni')->where('id', $key->usuarionr_id)->first(),
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
}
