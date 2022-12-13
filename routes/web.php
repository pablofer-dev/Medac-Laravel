<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/signin', [LoginController::class, 'index']);
Route::get('/signup', [RegisterController::class, 'index']);
Route::get('/reservas', function () {
    return view('reserva');
});
Route::get('/reservas-info', function () {
    return view('reserva2');
});
Route::get('/reservas-confirmacion', function () {
    return view('reserva3');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/info', function () {
    return view('info');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/contacto', [ContactoController::class, 'store']);
Route::post('/reservas', [ReservaController::class, 'store']);
