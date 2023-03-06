<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('auth/login', [AuthController::class, 'loginUser']);
Route::post('auth/register', [AuthController::class, 'createUser']);

Route::post('auth/reservas', [AuthController::class, 'reservas']);

Route::post('auth/misreservas', [AuthController::class, 'misreservas']);
Route::delete('auth/deletereservas', [AuthController::class, 'deletereservas']);
Route::get('auth/eventos', [AuthController::class, 'eventos']);
Route::get('auth/horasreservas', [AuthController::class, 'horasreservas']);
Route::get('auth/reservar', [AuthController::class, 'reservar']);
Route::get('auth/infoUserLogeado', [AuthController::class, 'infoUserLogeado']);
Route::post('auth/tokenableIDUser', [AuthController::class, 'tokenableIDUser']);
Route::get('auth/menus', [AuthController::class, 'menus']);